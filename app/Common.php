<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Common extends Model
{
   public $foo = '';

    public static function insert_data($data_array,$table_name)
    {
        return DB::table($table_name)->insertGetId($data_array);      
    }

    public static function update_data($id,$data_array,$table_name)
    {
        return DB::table($table_name)->where('id', $id)->update($data_array);
    }

    public static function single_data($id,$table_name,$status='1')
    {
        return DB::table($table_name)->where('id', $id)->where('status', $status)->first();
    }

    public static function data_by_with($where,$table)
    {
         return DB::table($table)->where($where)->first();
    }

    public static function search_data($select,$where,$table)
    {
       return DB::table($table)->select($select)->WhereRaw($where)->get();
    }

     public static function all_friends($select,$where,$table,$user_id)
    {
       return DB::select("select friend_id from friends where status='1' AND user_id='".$user_id."'");
    }

    public static function search_data_single($select,$where,$table)
    {
       return DB::table($table)->select($select)->WhereRaw($where)->first();
    }

     public static function search_data_with_pagination($select,$where,$table,$start_from,$limit)
    {
       return DB::table($table)
      ->select($select)
      ->WhereRaw($where)
      ->offset($start_from)
      ->limit($limit)
      ->get();
    }



    public static function search_single_data($select,$where,$table)
    {
       return DB::table($table)->select($select)->WhereRaw($where)->first();
    }
    public static function get_friend_requests($where,$start_from,$limit)
    {
        return DB::table('friends_request')
            ->join('users', 'users.id', '=', 'friends_request.request_sender')
            ->join('users as users_1', 'users_1.id', '=', 'friends_request.request_receiver')            
            ->select('users.id as sender_id','users.f_name as sender_f_name','users.picture as sender_picture','users.l_name as sender_l_name','friends_request.id as request_id','friends_request.status','users_1.f_name as receiver_f_name','users_1.l_name as receiver_l_name')->offset($start_from)
                ->limit($limit)
            ->WhereRaw($where)
            ->get();
    }    

   public static function delete_record($where,$table)
   {
        return DB::table($table)->where($where)->delete();
   }
    public static function delete_record2($where,$table)
   {
        return DB::table($table)->whereRaw($where)->delete();
   }
    public static function friends_list($where,$start_from,$limit)
    {

        return DB::table('friends')
            ->join('users', 'friends.friend_id', '=', 'users.id')            
            ->select('users.*') 
            ->offset($start_from)
            ->limit($limit)           
            ->where($where)
            ->get();
    }

    public static function random_string($user_id) {
        $length=10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $final_string=$randomString.time();

        $data=array(
            "login_token"=>$final_string
        );
        Common::update_data($user_id,$data,"users");
         return $final_string;
    }

    

    public static function increase($where,$column,$table,$add_value=1)
    {
        return DB::table($table)        
        ->where($where)
        ->increment($column,$add_value);
    }

    public static function decremental($where,$column,$table,$add_value=1)
    {
        return DB::table($table)        
        ->where($where)
        ->decrement($column,$add_value);
    }

    public static function get_notifications($receiver,$start_from,$limit)
    {
         return DB::table('notifications')
            ->join('users', 'notifications.sender', '=', 'users.id') 
            ->select('notifications.id as ntf_id','users.picture','notifications.notification','notifications.method','notifications.request_id','notifications.type','notifications.status','notifications.created_at','notifications.open','notifications.sender')
            ->whereRaw('notifications.receiver='.$receiver.' AND notifications.status=1')->offset($start_from)
                ->limit($limit)
                ->orderBy('notifications.id', 'desc')
            ->get();
    }



  




    public static function get_notificationscount($receiver)
    {
         return DB::table('notifications')
            ->join('users', 'notifications.sender', '=', 'users.id') 
            ->selectRaw('count(*) as notificationcount')          
            ->whereRaw('notifications.receiver='.$receiver.' AND notifications.status=1 AND read_bit=0')
            ->get()->first();
    }


    public static function get_messagescount($receiver)
    {
         return DB::table('messages')            
            ->selectRaw('count(*) as messagecount')          
            ->whereRaw('receiver_id='.$receiver.' AND status=1 AND read_bit=0')
            ->get()->first();
    }


public static function update_counter($data_array,$table_name,$where)
    {
        return DB::table($table_name)->whereRaw($where)->update($data_array);
    }


public static function all_event_participants($event_id,$start_from,$limit)
{
     return DB::table('event_participants')
            ->join('users', 'event_participants.participants_id', '=', 'users.id') 
            ->select('users.id','users.f_name','users.l_name','users.picture','event_participants.created_at')->whereRaw('event_participants.event_id='.$event_id.' AND event_participants.status=1')
             ->offset($start_from)
                ->limit($limit)
            ->get();
}


 public static function get_conversiationcount($receiver,$cnv_id)
    {
         return DB::table('messages')            
            ->selectRaw('count(*) as messagecount')          
            ->whereRaw('receiver_id='.$receiver.' AND status=1 AND read_bit=0 AND conversation_id='.$cnv_id.'')
            ->get()->first();
    }











    public static function last_followed_by($event_id)
    {	
    	 return DB::table('event_participants')
                ->join('users', 'users.id', '=', 'event_participants.participants_id')              
                ->select('users.id as user_id','users.f_name','users.l_name','users.user_name')
                ->WhereRaw('event_participants.event_id='.$event_id.'')
                ->orderBy('event_participants.updated_at','desc')
                ->limit(1)
                ->get();
    }



public static function total_count($table,$where)
    {
         return DB::table($table)           
            ->selectRaw('count(*) as '.$table.'')          
            ->whereRaw($where)
            ->get()->first();
    }



   



    public static function auto_msg($lat,$long,$user_id)
    {
         return DB::select('SELECT events.id as event_id,users.id as user_id,(6371 * acos(cos( radians( '.$lat.' ) ) * cos( radians( `lat` ) ) * cos(radians( `lng` ) - radians( '.$long.' )) + sin(radians('.$lat.')) * sin(radians(`lat`)))) `distance` from events,users,event_participants where events.user_id= users.id AND events.id=event_participants.event_id AND event_participants.participants_id='.$user_id.' AND UTC_TIMESTAMP()>=utc_start_datetime AND UTC_TIMESTAMP()<=utc_end_datetime having distance < 0.5 ');
    }

    public static function get_friends($user_id,$event_id)
    {
        return DB::select('SELECT `user_on_event`.`user_id` FROM `user_on_event` INNER JOIN `friends` ON (`user_on_event`.`user_id` = `friends`.`friend_id`) WHERE `friends`.`user_id`='.$user_id.' AND user_on_event.event_id='.$event_id.'');
    }

public static function auto_msg2($lat,$long,$user_id)
    {
         return DB::select('SELECT events.id as event_id,users.id as user_id,(6371 * acos(cos( radians( '.$lat.' ) ) * cos( radians( `lat` ) ) * cos(radians( `lng` ) - radians( '.$long.' )) + sin(radians('.$lat.')) * sin(radians(`lat`)))) `distance` from events,users where events.user_id= users.id AND UTC_TIMESTAMP()>=utc_start_datetime AND UTC_TIMESTAMP()<=utc_end_datetime having distance < 0.5 ');
    }



/****************************** All Walls *********************************************/
public static function main_wall_script($start_from,$limit)
    {
         return DB::table('events')           
             ->join('users', 'events.user_id', '=', 'users.id')
            ->select('events.id as event_id','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw('events.status=1 AND events.event_privacy!=1 AND  events.created_at > DATE_SUB(CURDATE(),INTERVAL 24 hour)')
            ->orderBy('events.created_at', 'desc')
            ->offset($start_from)
                ->limit($limit)
            ->get();
    }
   public static function my_wall_script($user_id,$start_from,$limit)
    {
         return DB::table('events')
            ->leftJoin('event_participants', 'event_participants.event_id', '=', 'events.id')
             ->join('users', 'events.user_id', '=', 'users.id')
            ->select('events.id as event_id','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw('events.status=1 AND (events.user_id='.$user_id.' OR event_participants.participants_id='.$user_id.')')->orderBy('events.updated_at','desc')
            ->offset($start_from)
                ->limit($limit)
            ->get();
    }
    public static function tomorrow_events_script($start_from,$limit)
    {
         return DB::table('events')           
             ->join('users', 'events.user_id', '=', 'users.id')
            ->select('events.id as event_id','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw('events.status=1 AND events.event_privacy!=1 AND  DATE_FORMAT(events.event_datetime, "%Y-%m-%d") = DATE_ADD(CURDATE(),INTERVAL 1 DAY)')
            ->orderBy('events.updated_at', 'desc')
            ->offset($start_from)
                ->limit($limit)
            ->get();
    }

    public static function date_events_script($date,$user_id)
    {

         return DB::table('events')
            ->leftJoin('event_participants', 'event_participants.event_id', '=', 'events.id')
             ->join('users', 'events.user_id', '=', 'users.id')
            ->select('events.id as event_id','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw('events.status=1 AND DATE_FORMAT(events.event_datetime, "%Y-%m-%d")="'.$date.'" AND (events.user_id='.$user_id.' OR event_participants.participants_id='.$user_id.')')->orderBy('events.updated_at','desc')          
            ->get();

      
    }
    public static function week_events_script($start_from,$limit)
    {
         return DB::table('events')           
             ->join('users', 'events.user_id', '=', 'users.id')
            ->select('events.id as event_id','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw('events.status=1 AND events.event_privacy!=1 AND DATE_FORMAT(events.event_datetime, "%Y-%m-%d") >= CURDATE() AND DATE_FORMAT(events.event_datetime, "%Y-%m-%d")<=DATE_ADD(CURDATE(),INTERVAL 7 DAY)')
            ->orderBy('events.updated_at', 'desc')
            ->offset($start_from)
                ->limit($limit)
            ->get();
    }


    public static function location_wise($start_from,$limit,$lat,$long)
    {
         return DB::select('SELECT events.id as event_id,events.type,users.picture,users.cover_img,users.id as user_id,users.f_name,users.l_name,events.title,events.event_datetime,events.lat,events.lng,events.venue,events.created_at,events.event_privacy,events.utc_end_datetime,events.utc_start_datetime,events.total_joins, (6371 * acos(cos( radians( '.$lat.' ) ) * cos( radians( `lat` ) ) * cos(radians( `lng` ) - radians( '.$long.' )) + sin(radians('.$lat.')) * sin(radians(`lat`)))) `distance` from events,users where events.user_id= users.id  having distance < 20 limit '.$start_from.','.$limit.' ');
    }




     public static function event_live($start_from,$limit)
    {
         return DB::table('events')           
             ->join('users', 'events.user_id', '=', 'users.id')
            ->select('events.id as event_id','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw("events.status=1 AND events.event_privacy!=1 AND UTC_TIMESTAMP()>=utc_start_datetime AND UTC_TIMESTAMP()<=utc_end_datetime")
            ->orderBy('events.updated_at', 'desc')
            ->offset($start_from)
                ->limit($limit)
            ->get();
    }

 public static function friend_filter($user_id,$start_from,$limit,$friends)
    {
         return DB::table('events')
            ->leftJoin('event_participants', 'event_participants.event_id', '=', 'events.id')
             ->join('users', 'events.user_id', '=', 'users.id')
            ->select('events.id as event_id','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw('events.status=1 AND (events.user_id IN('.$friends.') OR event_participants.participants_id IN('.$friends.'))')->orderBy('events.updated_at','desc')
            ->distinct()
            ->offset($start_from)
                ->limit($limit)
            ->get();
    }

    public static function event_user_search($start_from,$limit,$key_word,$user_id)
    {
          return DB::table('events')
            ->leftJoin('event_participants', 'event_participants.event_id', '=', 'events.id')
             ->join('users', 'events.user_id', '=', 'users.id')
            ->select('events.id as event_id','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw('events.status=1 AND events.title like "%'.$key_word.'%" AND (events.user_id='.$user_id.' OR event_participants.participants_id='.$user_id.')')->orderBy('events.updated_at','desc')
            ->offset($start_from)
                ->limit($limit)
            ->get();
    }

/*************************************************************************************/

 public static function create_password($user_id,$length=6) {
        
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $final_string=$randomString.time();

        $data=array(
            "password"=>md5($final_string)
        );
        Common::update_data($user_id,$data,"users");
         return $final_string;
    }



    public static function get_user_token($id)
    {
        return DB::table('users')->select('device_token')->where('id',$id)->where('notification_bit',1)->first();

    }



    public static function generate_verify_code($user_id)
    {
        $charset = "0123456789";
        $base = strlen($charset);
        $result = '';

        $now = explode(' ', microtime())[1];
        
        while ($now >= $base)
        {
            $i = $now % $base;
            $result = $charset[$i] . $result;
            $now /= $base;
          }

        $final_string = substr($result, -4);

        $data=array(
            "verify_code" => $final_string
        );
        Common::update_data($user_id,$data,"users");

        return $final_string;
    }



    public static function get_event_detail($event_id)
    {
        return DB::table('events')           
             ->join('users', 'events.user_id', '=', 'users.id')
             ->join('event_types', 'events.type', '=', 'event_types.id')
            ->select('events.id as event_id','event_types.name as event_type_name','events.type','users.picture','users.cover_img','users.id as user_id','users.f_name','users.l_name','users.user_name','users.country','events.title','events.event_file','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime','events.event_category')
            ->whereRaw('events.id='.$event_id.' ')
            ->first();
    }

    public static function get_event_comments($event_id,$limit,$from)
    {
         return DB::table('event_comments')           
             ->join('users', 'event_comments.user_id', '=', 'users.id')             
            ->select('event_comments.id as comment_id','event_comments.comment','event_comments.comment_file','event_comments.created_at','users.id as user_id','users.f_name','users.l_name')
            ->whereRaw('event_comments.event_id='.$event_id.' AND event_comments.status=1 ')
            ->orderBy('event_comments.id', 'desc')
             ->offset($from)
            ->limit($limit)
            ->get();
    }

    public static function like_list($event_id,$limit,$from){
         return DB::table('liked_events')           
             ->join('users', 'liked_events.user_id', '=', 'users.id')             
            ->select('users.id as user_id','users.f_name','users.l_name','liked_events.post_date')
            ->whereRaw('liked_events.event_id='.$event_id.'')
             ->offset($from)
            ->limit($limit)
            ->get();
    }

     public static function planed_list($event_id,$limit,$from){
         return DB::table('planed_events')           
             ->join('users', 'planed_events.user_id', '=', 'users.id')             
            ->select('users.id as user_id','users.f_name','users.l_name','users.picture','users.cover_img','planed_events.post_date')
            ->whereRaw('planed_events.event_id='.$event_id.'')
             ->offset($from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_events($event_category)
    {
        return DB::table('events')           
             ->join('users', 'events.user_id', '=', 'users.id')
             ->join('event_types', 'events.type', '=', 'event_types.id')
            ->select('events.id as event_id','events.event_file as event_file','event_types.name as event_type_name','events.type','events.event_category','users.picture','users.country','users.user_name','users.cover_img','users.id as user_id','users.f_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw('events.status = 1 AND events.event_category = '.$event_category.'  ')
            ->orderBy('events.created_at','desc')
            ->get();
    }
    
    public static function event_comments($event_id,$limit,$from)
    {
         return DB::table('event_comments')           
             ->join('users', 'event_comments.user_id', '=', 'users.id')             
            ->select('event_comments.id as comment_id','event_comments.comment','event_comments.comment_file','event_comments.created_at','users.id as user_id','users.f_name','users.l_name')
            ->whereRaw('event_comments.event_id='.$event_id.' AND event_comments.status=1 ')
            ->orderBy('event_comments.id', 'desc')
             ->offset($from)
            ->limit($limit)
            ->first();
    }
    
    public static function count_event_comments($event_id)
    {
        return DB::table('event_comments')->selectRaw('count(*) AS comment_counter')->whereRaw('event_id = '.$event_id.' ')->first();
    }
    
    
    public static function get_countries($continent_id)
    {
        return DB::table('countries')->where('continent_id', $continent_id)->where('status', 1)->get();
    }
    
    
    public static function get_cities($country_id)
    {
        return DB::table('cities')->where('country_id', $country_id)->where('status', 1)->get();
    }


    public static function get_conversiation($user_id,$start_from,$limit)
    {
         return DB::table('conversation')
            ->join('users', 'conversation.user', '=', 'users.id') 
            ->join('users as users_1', 'conversation.friend', '=', 'users_1.id')            
            ->select('conversation.id as cnv_id','users.f_name','users.picture','users.l_name','users.id as user_id','users_1.f_name as sender_f_name','users_1.l_name as sender_l_name','users_1.user_name as sender_user_name','users.user_name as user_name','users_1.picture as sender_picture','users_1.id as sender_id','conversation.last_msg','conversation.updated_at')
            ->whereRaw('conversation.user='.$user_id.' OR conversation.friend='.$user_id.'')
            ->orderBy('conversation.updated_at', 'desc')
            ->offset($start_from)
                ->limit($limit)
            ->get();
    }
    
    public static function count_like_events($user_id)
    {
        return DB::table('liked_events')->selectRaw('count(*) AS like_counter')->whereRaw('user_id = '.$user_id.' ')->first();
    }
    
    public static function count_create_events($user_id)
    {
        return DB::table('events')->selectRaw('count(*) AS create_counter')->whereRaw('user_id = '.$user_id.' AND status = 1 ')->first();
    }
    
    public static function count_planed_events($user_id)
    {
        return DB::table('planed_events')->selectRaw('count(*) AS attending_events')->whereRaw('`user_id` = '.$user_id.' and `post_date` < CURRENT_DATE() ')->first();
    }
    
    
    public static function get_live_events($start_from,$limit)
    {
        return DB::table('events')           
             ->select('id','title','event_category','event_file')
            ->whereRaw('status = 1 AND UTC_TIMESTAMP() >= utc_start_datetime AND UTC_TIMESTAMP() <= utc_end_datetime')
             ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_past_events($start_from,$limit)
    {
        // after lal and umar farooq approval
        
        return DB::table('events')           
             ->select('id','title','event_category','event_file','event_datetime')
            ->whereRaw('status = 1 AND DATE_FORMAT(`utc_start_datetime`, "%Y-%m-%d") < CURDATE()')
            ->orderBy('utc_start_datetime', 'desc')
             ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_this_week_events($start_from,$limit)
    {
        // after lal and umar farooq approval
        
        return DB::table('events')           
             ->select('id','title','event_category','event_file','event_datetime')
            ->whereRaw('status = 1 AND DATE_FORMAT(`utc_start_datetime`, "%Y-%m-%d") <= DATE_ADD(CURDATE(),INTERVAL 7 DAY) AND DATE_FORMAT(`utc_start_datetime`, "%Y-%m-%d") > CURDATE()')
            ->orderBy('utc_start_datetime', 'ASC')
             ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_today_events($start_from,$limit)
    {
        // after umar farooq approval
        
        return DB::table('events')           
             ->select('id','title','event_category','event_file','event_datetime')
            ->whereRaw('status = 1 AND DATE_FORMAT(`utc_start_datetime`, "%Y-%m-%d") = CURDATE()')
            ->orderBy('utc_start_datetime', 'ASC')
             ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_like_events($user_id,$start_from,$limit)
    {
        return DB::table('events')
            ->join('liked_events', 'events.id', '=', 'liked_events.event_id')
            ->select('liked_events.event_id','events.title','events.event_datetime','events.event_category','events.event_file')
            ->whereRaw('`liked_events`.`user_id` = '.$user_id.' AND `events`.`status` = 1')
            ->orderBy('events.created_at', 'desc')
            ->offset($start_from)
                ->limit($limit)
            ->get();
            
    }
    
    
    public static function get_create_events($user_id,$start_from,$limit)
    {
        return DB::table('events')           
             ->select('id','title','event_category','event_file','event_datetime')
            ->whereRaw('status = 1 AND user_id = '.$user_id.' ')
            ->orderBy('created_at', 'desc')
             ->offset($start_from)
            ->limit($limit)
            ->get();
            
    }
    
    
    public static function event_search($start_from,$limit,$key_word)
    {
         return DB::table('events')           
            ->select('id','title','event_category','event_file','event_datetime')
            ->whereRaw("status = 1 AND title like '%".$key_word."%' ")
            ->orderBy('events.created_at', 'desc')
            ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_attending_events($user_id,$start_from,$limit)
    {
        return DB::table('events')
            ->join('planed_events', 'events.id', '=', 'planed_events.event_id')
            ->select('planed_events.event_id','events.title','events.event_datetime','events.event_category','events.event_file')
            ->whereRaw('planed_events.user_id = '.$user_id.' AND events.status = 1 AND planed_events.post_date < CURRENT_DATE() ')
            ->orderBy('events.created_at', 'desc')
            ->offset($start_from)
            ->limit($limit)
            ->get();
            
    }
    
    
    public static function check_reported_event($user_id,$event_id,$event_type)
    {
        return DB::select("SELECT * FROM `reported_events` WHERE `event_id` = $event_id AND `user_id` = $user_id AND `report_type` = '$event_type' ");
    }
    
    
    
    public static function get_followers($user_id,$start_from,$limit)
    {
        return DB::table('friends_request')
            ->join('users', 'friends_request.request_sender', '=', 'users.id')
            ->select('users.f_name','users.l_name','users.picture','users.user_name','friends_request.request_sender','friends_request.id')
            ->whereRaw('`friends_request`.`status` = 1 AND `friends_request`.`request_receiver` = '.$user_id.' ')
            ->orderBy('friends_request.id', 'desc')
            ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    
    public static function get_following($user_id,$start_from,$limit)
    {
        return DB::table('friends_request')
            ->join('users', 'friends_request.request_receiver', '=', 'users.id')
            ->select('users.f_name','users.l_name','users.user_name','users.picture','friends_request.request_receiver','friends_request.id')
            ->whereRaw('`friends_request`.`status` = 1 AND `friends_request`.`request_sender` = '.$user_id.' ')
            ->orderBy('friends_request.id', 'desc')
            ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_receive_request($user_id,$start_from,$limit)
    {
        return DB::table('friends_request')
            ->join('users', 'friends_request.request_sender', '=', 'users.id')
            ->select('users.f_name','users.l_name','users.user_name','users.picture','friends_request.request_sender','friends_request.request_receiver','friends_request.id')
            ->whereRaw('`friends_request`.`status` != 1 AND `friends_request`.`request_receiver` = '.$user_id.' ')
            ->orderBy('friends_request.id', 'desc')
            ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_sending_request($user_id,$start_from,$limit)
    {
        return DB::table('friends_request')
            ->join('users', 'friends_request.request_receiver', '=', 'users.id')
            ->select('users.f_name','users.l_name','users.user_name','users.picture','friends_request.request_sender','friends_request.request_receiver','friends_request.id')
            ->whereRaw('`friends_request`.`status` != 1 AND `friends_request`.`request_sender` = '.$user_id.' ')
            ->orderBy('friends_request.id', 'desc')
            ->offset($start_from)
            ->limit($limit)
            ->get();
    }
    
    
    public static function get_user_notifications($user_id,$start_from,$limit)
    {
        return DB::table('notifications')           
            ->whereRaw('receiver = '.$user_id.' ')
            ->orderBy('id', 'desc')
             ->offset($start_from)
            ->limit($limit)
            ->get();
            
    }
    
    
    public static function get_request_id($sender_id,$receiver_id)
    {
        return DB::table('friends_request')
            //->select('id')
            ->whereRaw('`request_sender` = '.$sender_id.' AND `request_receiver` = '.$receiver_id.' ')
            ->first();
    }
    
    
    public static function get_time_period()
    {
        return DB::table('add_display_period')
            ->select('id','time_period','price')
            ->whereRaw('status = 1 ')
            ->get();
    }

    
    public static function count_follower($user_id)
    {
        return DB::table('friends_request')->selectRaw('count(*) AS total_followers')->whereRaw('`friends_request`.`status` = 1 AND `friends_request`.`request_receiver` = '.$user_id.' ')->first();
    }
    
    
    public static function count_following($user_id)
    {
        return DB::table('friends_request')->selectRaw('count(*) AS total_following')->whereRaw('`friends_request`.`status` = 1 AND `friends_request`.`request_sender` = '.$user_id.' ')->first();
    }
    
    
    public static function get_user_event_subscription($user_id)
    {
        return DB::table('subscription_for_event_types')->selectRaw('id,event_type_id')->whereRaw('user_id = '.$user_id.' ')->get();
    }
    
    
    public static function get_user_location_subscription($user_id)
    {
        return DB::table('subscription_for_locations')->selectRaw('id,subscribe_location_id')->whereRaw('user_id = '.$user_id.' ')->get();
    }
    
    public static function get_banner_without_login()
    {
        return DB::select('SELECT `advertisement_banner`.`banner_file`, `advertisement_banner`.`url`,`advertisement_banner`.`start_date`, `add_display_period`.`time_period`,`advertisement_banner`.`continent_id`, `advertisement_banner`.`country_id`,`advertisement_banner`.`city_id`,`advertisement_banner`.`event_type_interest_id` FROM `add_display_period` INNER JOIN `advertisement_banner` ON (`add_display_period`.`id` = `advertisement_banner`.`period_id`) WHERE `advertisement_banner`.`status` = 1 AND `advertisement_banner`.`start_date` >= CURRENT_DATE() ');
    }
    
    
    public static function get_complete_interest_banner()
    {
        return DB::select('SELECT `advertisement_banner`.`banner_file`, `advertisement_banner`.`url`,`advertisement_banner`.`start_date`, `add_display_period`.`time_period`,`advertisement_banner`.`continent_id`, `advertisement_banner`.`country_id`,`advertisement_banner`.`city_id`,`advertisement_banner`.`event_type_interest_id` FROM `add_display_period` INNER JOIN `advertisement_banner` ON (`add_display_period`.`id` = `advertisement_banner`.`period_id`) WHERE `advertisement_banner`.`status` = 1 AND `advertisement_banner`.`start_date` >= CURRENT_DATE() AND `advertisement_banner`.`event_type_interest_id` = 0 ');
    }
    
    
    public static function get_banner_with_event_interest($event_type_ids)
    {
        return DB::select('SELECT `advertisement_banner`.`banner_file`, `advertisement_banner`.`url`,`advertisement_banner`.`start_date`, `add_display_period`.`time_period`,`advertisement_banner`.`continent_id`, `advertisement_banner`.`country_id`,`advertisement_banner`.`city_id`,`advertisement_banner`.`event_type_interest_id` FROM `add_display_period` INNER JOIN `advertisement_banner` ON (`add_display_period`.`id` = `advertisement_banner`.`period_id`) WHERE `advertisement_banner`.`status` = 1 AND `advertisement_banner`.`start_date` >= CURRENT_DATE() AND `advertisement_banner`.`event_type_interest_id` IN ('.$event_type_ids.') ');
    }
    
    
    public static function get_filtered_events($where)
    {
        return DB::table('events')           
             ->join('users', 'events.user_id', '=', 'users.id')
             ->join('event_types', 'events.type', '=', 'event_types.id')
            ->select('events.id as event_id','events.event_file as event_file','event_types.name as event_type_name','events.type','events.event_category','users.picture','users.country','users.cover_img','users.id as user_id','users.f_name','users.user_name','users.l_name','events.title','events.event_datetime','events.lat','events.lng','events.venue','events.created_at','events.event_privacy','events.total_joins','events.utc_end_datetime','events.utc_start_datetime')
            ->whereRaw($where)
            ->orderBy('events.created_at','desc')
            ->get();
    }

    
    public static function get_event_profile($user_id,$limit,$start_from)
    {
        return DB::select('SELECT DISTINCT event_id, `title`, `event_category`, `event_file`, `event_datetime` FROM ( SELECT `planed_events`.`event_id`, `events`.`title`, `events`.`event_category`,`events`.`event_file`,`events`.`event_datetime`   FROM `events` INNER JOIN `planed_events` ON `events`.`id` = `planed_events`.`event_id` WHERE planed_events.user_id = '.$user_id.' AND events.status = 1 AND planed_events.post_date < CURRENT_DATE() 
UNION ALL
SELECT `id` AS event_id, `title`, `event_category`, `event_file`, `event_datetime` FROM `events` WHERE STATUS = 1 AND user_id = '.$user_id.' 
UNION ALL
SELECT `liked_events`.`event_id`, `events`.`title`, `events`.`event_category`, `events`.`event_file`, `events`.`event_datetime`  FROM `events` INNER JOIN `liked_events` ON `events`.`id` = `liked_events`.`event_id` WHERE `liked_events`.`user_id` = '.$user_id.' AND `events`.`status` = 1 ) AS abc ORDER BY event_id DESC LIMIT '.$limit.' OFFSET '.$start_from.' ');
    }
    
    
    
    public static function search_follower_users($key_word)
    {
         return DB::table('users')           
            ->select('id')
            ->whereRaw("user_name like '%".$key_word."%' ")
            ->get();
    }
    
    
    public static function search_followers_data($user_id,$ids)
    {
        return DB::table('friends_request')
            ->join('users', 'friends_request.request_sender', '=', 'users.id')
            ->select('users.f_name','users.l_name','users.picture','users.user_name','friends_request.request_sender','friends_request.id')
            ->whereRaw('`friends_request`.`status` = 1 AND `friends_request`.`request_receiver` = '.$user_id.' AND `friends_request`.`request_sender` IN ('.$ids.') ')
            ->orderBy('friends_request.id', 'desc')
            ->get();
    }
    
    
    public static function search_following_data($user_id,$ids)
    {
        return DB::table('friends_request')
            ->join('users', 'friends_request.request_receiver', '=', 'users.id')
            ->select('users.f_name','users.l_name','users.user_name','users.picture','friends_request.request_receiver','friends_request.id')
            ->whereRaw('`friends_request`.`status` = 1 AND `friends_request`.`request_sender` = '.$user_id.' AND `friends_request`.`request_receiver` IN ('.$ids.') ')
            ->orderBy('friends_request.id', 'desc')
            ->get();
    }
    
    
    public static function count_received_request($user_id)
    {
        return DB::table('friends_request')->selectRaw('count(*) AS total_received_request')->whereRaw('`friends_request`.`status` != 1 AND `friends_request`.`request_receiver` = '.$user_id.' ')->first();
    }
    
    
    public static function count_send_request($user_id)
    {
        return DB::table('friends_request')->selectRaw('count(*) AS total_send_request')->whereRaw('`friends_request`.`status` != 1 AND `friends_request`.`request_sender` = '.$user_id.' ')->first();
    }
    
    

}




