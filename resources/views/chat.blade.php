@foreach($chat as $message)
	
	@if($message->sender_id != Auth::user()->id)
	<li class="left clearfix">
	  <span class="chat-img1 float-left">
	    <img src="{{ url('/').'/public/user_images/'.$message->image }}" alt="User Avatar" class="img-circle">
	  </span>
	  <div class="chat-body1 clearfix">
	      <p>{{ $message->message }}</p>
	      <div class="chat_time float-right">{{ $message->created_at }}</div>
	  </div>
	</li>
	
	@else
	<li class="left clearfix admin_chat">
	    <span class="chat-img1 float-right">
	    <img src="{{ url('/').'/public/user_images/'.$message->image }}" alt="User Avatar" class="img-circle">
	    </span>
	    <div class="chat-body1 clearfix">
	        <p>{{ $message->message }}</p>
	        <div class="chat_time float-left">{{ $message->created_at }}</div>
	    </div>
	</li>
	@endif

@endforeach