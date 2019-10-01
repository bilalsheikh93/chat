<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use App\Events\NewMessage;
use App\Conversation;
use DB;
use Auth;

class ContactsController extends Controller
{
    public function get()
    {
        // get all users except the authenticated one
        // $contacts = User::where('id', '!=', auth()->id())->get();

        // get a collection of items where sender_id is the user who sent us a message
        // and messages_count is the number of unread messages we have from him
        // $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
        //     ->where('to', auth()->id())
        //     ->where('read', false)
        //     ->groupBy('from')
        //     ->get();

        // add an unread key to each contact with the count of unread messages
        // $contacts = $contacts->map(function($contact) use ($unreadIds) {
        //     $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

        //     $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

        //     return $contact;
        // });

        $user = Auth::user()->id;

        $contacts = DB::table('conversations')
        ->join('users', 'conversations.sender_id', '=', 'users.id')
        ->join('users as users_1', 'conversations.receiver_id', '=', 'users_1.id')
        ->select('conversations.id as cnv_id',
        'users.image as s_image','users.name as s_name','users.id as s_id', 'users.email as s_email',
        'users_1.name as r_name','users_1.image as r_image','users_1.id as r_id', 'users_1.email as r_email',
        'conversations.last_message','conversations.updated_at')
        ->whereRaw('conversations.sender_id='.$user.' OR conversations.receiver_id='.$user.'')
        ->orderBy('conversations.updated_at', 'desc')
        ->get();

        $final = array();
        for($i=0; $i<count($contacts); $i++ ){
            if($contacts[$i]->s_id == $user){
                $final[$i]['id'] = $contacts[$i]->r_id;
                $final[$i]['name'] = $contacts[$i]->r_name;
                $final[$i]['email'] = $contacts[$i]->r_email;
            }
            else if($contacts[$i]->r_id == $user){
                $final[$i]['id'] = $contacts[$i]->s_id;
                $final[$i]['name'] = $contacts[$i]->s_name;
                $final[$i]['email'] = $contacts[$i]->s_email;
            }
            else{

            }
        }

        return response()->json($final);
    }

    public function getMessagesFor($id)
    {
        // mark all messages with the selected contact as read
        Message::where('from', $id)->where('to', auth()->id())->update(['read' => true]);

        // get all messages between the authenticated user and the selected user
        $messages = Message::where(function($q) use ($id) {
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('from', $id);
            $q->where('to', auth()->id());
        })
        ->get();

        return response()->json($messages);
    }

    public function send(Request $request)
    {

        $sender_id = auth()->id();
        $receiver_id = $request->contact_id;
        $text = $request->text;

        $check_conversation = Conversation::where([['sender_id', $sender_id], ['receiver_id', $receiver_id]])->orWhere([['sender_id', $receiver_id], ['receiver_id', $sender_id]])->first();

        if($check_conversation){

            $message = Message::create(['from' => $sender_id, 'to' => $receiver_id, 'text' => $text, 'conversation_id' => $check_conversation->id]);

            $check_conversation->last_message = $text;
            $check_conversation->save();
        }
        else{
            Conversation::create(['sender_id' => $sender_id, 'receiver_id' => $receiver_id, 'last_message' => $text]);

            $get_latest_coversation = Conversation::orderBy('id', 'DESC')->first();
            $message = Message::create(['from' => $sender_id, 'to' => $receiver_id, 'text' => $text, 'conversation_id' => $get_latest_coversation->id]);

        }

        // $message = Message::create([
        //     'from' => auth()->id(),
        //     'to' => $request->contact_id,
        //     'text' => $request->text
        // ]);

        broadcast(new NewMessage($message));

        return response()->json($message);
    }


    public function get_contacts_without_conversation()
    {

        $user = Auth::user();

        $get_new_users = DB::select("SELECT DISTINCT
                `users`.`name` ,
                `users`.`email` ,
                `users`.`id` FROM `users`
                LEFT OUTER JOIN `messages`
                ON (`users`.`id` = `messages`.`from`)
                WHERE `users`.`parent_id`= $user->parent_id AND `users`.`id`
                NOT IN( SELECT DISTINCT id FROM
                (SELECT `to` AS id FROM messages WHERE `from`= $user->id
                UNION ALL SELECT `from` AS id FROM messages WHERE `to` =  $user->id ) AS t)
                AND users.`id` != $user->id ");

        return response()->json($get_new_users);

    }
}
