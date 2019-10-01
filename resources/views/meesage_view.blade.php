@extends('layouts.app')

@section('content')

@extends('layouts.nav')


<style>

#custom-search-input {
  background: #e8e6e7 none repeat scroll 0 0;
  margin: 0;
  padding: 10px;
}
   #custom-search-input .search-query {
   background: #fff none repeat scroll 0 0 !important;
   border-radius: 4px;
   height: 33px;
   margin-bottom: 0;
   padding-left: 7px;
   padding-right: 7px;
   }
   #custom-search-input button {
   background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
   border: 0 none;
   border-radius: 3px;
   color: #666666;
   left: auto;
   margin-bottom: 0;
   margin-top: 7px;
   padding: 2px 5px;
   position: absolute;
   right: 0;
   z-index: 9999;
   }
   .search-query:focus + button {
   z-index: 3;   
   }
   .all_conversation button {
   background: #f5f3f3 none repeat scroll 0 0;
   border: 1px solid #dddddd;
   height: 38px;
   text-align: left;
   width: 100%;
   }
   .all_conversation i {
   background: #e9e7e8 none repeat scroll 0 0;
   border-radius: 100px;
   color: #636363;
   font-size: 17px;
   height: 30px;
   line-height: 30px;
   text-align: center;
   width: 30px;
   }
   .all_conversation .caret {
   bottom: 0;
   margin: auto;
   position: absolute;
   right: 15px;
   top: 0;
   }
   .all_conversation .dropdown-menu {
   background: #f5f3f3 none repeat scroll 0 0;
   border-radius: 0;
   margin-top: 0;
   padding: 0;
   width: 100%;
   }
   .all_conversation ul li {
   border-bottom: 1px solid #dddddd;
   line-height: normal;
   width: 100%;
   }
   .all_conversation ul li a:hover {
   background: #dddddd none repeat scroll 0 0;
   color:#333;
   }
   .all_conversation ul li a {
  color: #333;
  line-height: 30px;
  padding: 3px 20px;
}
   .member_list .chat-body {
   margin-left: 47px;
   margin-top: 0;
   }
   .top_nav {
   overflow: visible;
   }
   .member_list .contact_sec {
   margin-top: 3px;
   }
   .member_list li {
   padding: 6px;
   }
   .member_list ul {
   border: 1px solid #dddddd;
   }
   .chat-img img {
   height: 34px;
   width: 34px;
   }
   .member_list li {
   border-bottom: 1px solid #dddddd;
   padding: 6px;
   }
   .member_list li:last-child {
   border-bottom:none;
   }
   .member_list {
   height: 380px;
   overflow-x: hidden;
   overflow-y: auto;
   }
   .sub_menu_ {
  background: #e8e6e7 none repeat scroll 0 0;
  left: 100%;
  max-width: 233px;
  position: absolute;
  width: 100%;
}
.sub_menu_ {
  background: #f5f3f3 none repeat scroll 0 0;
  border: 1px solid rgba(0, 0, 0, 0.15);
  display: none;
  left: 100%;
  margin-left: 0;
  max-width: 233px;
  position: absolute;
  top: 0;
  width: 100%;
}
.all_conversation ul li:hover .sub_menu_ {
  display: block;
}
.new_message_head button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
}
.new_message_head {
  background: #f5f3f3 none repeat scroll 0 0;
  float: left;
  font-size: 13px;
  font-weight: 600;
  padding: 18px 10px;
  width: 100%;
}
.message_section {
  border: 1px solid #dddddd;
}
.chat_area {
  float: left;
  height: 300px;
  overflow-x: hidden;
  overflow-y: auto;
  width: 100%;
}
.chat_area li {
  padding: 14px 14px 0;
}
.chat_area li .chat-img1 img {
  height: 40px;
  width: 40px;
}
.chat_area .chat-body1 {
  margin-left: 50px;
}
.chat-body1 p {
    background: #fbf9fa none repeat scroll 0 0;
    width: 50%;
    padding: 10px;
    margin-left: auto;
}
.chat_area .admin_chat .chat-body1 {
  margin-left: 0;
  margin-right: 50px;
}
.chat_area li:last-child {
  padding-bottom: 10px;
}
.message_write {
  background: #f5f3f3 none repeat scroll 0 0;
  float: left;
  padding: 15px;
  width: 100%;
}

.message_write textarea.form-control {
  height: 70px;
  padding: 10px;
}
.chat_bottom {
  float: left;
  margin-top: 13px;
  width: 100%;
}
.upload_btn {
  color: #777777;
}
.sub_menu_ > li a, .sub_menu_ > li {
  float: left;
  width:100%;
}
.member_list li:hover {
  background: #428bca none repeat scroll 0 0;
  color: #fff;
  cursor:pointer;
}
strong{
    font-size: 12px !important;
    margin-right: 18px;
}


.chat-body11 p {
    background: #fbf9fa none repeat scroll 0 0;
    width: 50%;
    padding: 10px;
    margin-left : 47px;
    margin-right: auto;
}

.chat_time {
    width: 68%;
    margin-left: auto;
}

.chat_time1 {
    width: 50%;
    margin-left: auto;
}
</style>


    <div class="container-fluid">
        <div class="row m-4">
            <div class="col-md-12 pb-5 m-auto" style="background-color:white">
                <h5 class="text-center mt-3 font-weight-bold" style="font-size: inherit;">Messages</h5>
                <div class="main_section mt-5">
                    <div class="container">
                        <div class="chat_container row">
                            <div class="col-sm-5 chat_sidebar">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="custom-search-input">
                                            <div class="input-group col-md-12">
                                                <input type="text" class="  search-query form-control" placeholder="Conversation" />
                                                <button class="btn btn-danger" type="button">
                                                <span class=" glyphicon glyphicon-search"></span>
                                                </button>
                                            </div>
                                        </div>
                                
                                        <div class="member_list">
                                            <ul class="list-unstyled" id="member_list">
                                              
                                            </ul>
                                                <input type="hidden" id="user_name" value="" /> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <!--chat_sidebar-->
                            <div class="col-sm-7 message_section">
                                <div class="row">
                                    <div class="new_message_head">
                                        <div class="float-left"><button  data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-plus-square-o" aria-hidden="true">
                                            </i> New Message</button>
                                            
                                        </div>
                                        <div class="float-right">
                                            <h6 id="chat_user_name"></h6>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Users</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <table class="table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Name</th>
                                                      <th scope="col">Email</th>
                                                      <th scope="col">Action</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php for($nu = 0; $nu<count($get_new_users); $nu++){ ?>
                                                    <tr>
                                                      <th scope="row"><?php echo $nu+1; ?></th>
                                                      <td><?php echo $get_new_users[$nu]->name; ?></td>
                                                      <td><?php echo $get_new_users[$nu]->email; ?></td>
                                                      <td><a class="user_chat_link" data-user-id="{{ $get_new_users[$nu]->user_id }}" data-user-name="{{ $get_new_users[$nu]->name }}"><i class="fa fa-comments" style="font-size:22px;" data-dismiss="modal"></i></a></td>
                                                    </tr>
                                                 <?php } ?>
                                                  </tbody>
                                                  
                                                </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                        <!--new_message_head-->
                                        
                                    <div class="chat_area">
                                      <ul class="list-unstyled" id="chat_box">
                                        
                                          
                                        
                                      </ul>
                                    </div>
                                    <!--chat_area-->
                                        <div class="message_write">
                                          <form method="POST" class="post_message">
                                            <input name="csrfToken" value="" type="hidden">
                                            <input type="hidden" value="{{ Auth::user()->id }}" name="sender_id" id="sender_id"/>
                                            <input type="hidden" value="" name="receiver_id" id="receiver_id" />
                                            <textarea class="form-control" id="message_text" placeholder="type a message" name="message"></textarea>
                                            <div class="clearfix"></div>
                                            <div class="chat_bottom">
                                                <button type="button" id="message_send" class="float-right btn btn-success">
                                                Send</button>
                                            </div>
                                          </form>
                                        </div>
                                    </div>
                            </div> 
                            <!--message_section-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>

  $(document).ready(function (){

    var name = "";
    var user_id = "";
    var conv_id = 0;

        // $('.user_chat_link').on('click', function(){
        //     name = $('#chat_user_name').html($(this).attr('data-user-name'));
        //     user_id = $(this).attr('data-user-id');
        //     conv_id = $(this).attr('data-conv-id');
        //     $('#receiver_id').val(user_id);
        // });

        var van="{{ url('/') }}";

        (function worker() {
        $.ajax({
            url:van+'/chat/'+conv_id,
            async:false,
            dataType: 'json',
            success: function(result)
            {
                $("#chat_box").html(result['chat_message']);
                $("#member_list").html(result['user_list']);
                $('.user_chat_link').on('click', function(){
                    name = $('#chat_user_name').html($(this).attr('data-user-name'));
                    user_id = $(this).attr('data-user-id');
                    conv_id = $(this).attr('data-conv-id');
                    $('#receiver_id').val(user_id);
                });
                // alert(result['chat_message']);
                // alert(result['user_list']);
            },
            complete: function() {
            // Schedule the next request when the current one's complete
              setTimeout(worker, 5000);
            }
        });
        })();


        $('#message_send').on('click', function(e){
              
            var message_text = $('textarea#message_text').val();
            var receiver_id = $('#receiver_id').val();
            var sender_id = $('#sender_id').val();
            var token =  $('input[name="csrfToken"]').attr('value');

            if(receiver_id!=""){
              var van="{{ url('/') }}";

              $.ajax({
                  url:van+'/send_message',
                  type:'post',
                  data: {message:message_text,receiver_id:receiver_id,sender_id:sender_id, "_token": "{{ csrf_token() }}"},
                  async:false,
                  success: function(result)
                  {
                    $('textarea#message_text').val("");
                  }
              });
            }
            else
            {
                alert("Please select user first")
            }
        });


      $( '.search-query' ).keyup( function() {
        var matches = $( 'ul#member_list' ).find( 'li:contains('+ $( this ).val() +') ' );
        $( 'li', 'ul#member_list' ).not( matches ).slideUp();
        matches.slideDown();    
    });


      // (function chat_users() {
      //   var van="{{ url('/') }}";

      //   $.ajax({
      //       url:van+'/chat_user_ajax_load',
      //       async:false,
      //       dataType: 'html',
      //       success: function(result)
      //       {
      //           $("#member_list").html(result);
      //       },
      //       complete: function() {
      //       // Schedule the next request when the current one's complete
      //         setTimeout(chat_users, 5000);
      //       }
      //   });
      // })();
  });

</script>
@endsection
