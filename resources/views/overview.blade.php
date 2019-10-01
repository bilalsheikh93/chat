@extends('layouts.app')

@section('content')

@extends('layouts.nav')

<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<script>
    $(function() {
  $('#current_emails').text($('#example_email').val());
  $('#example_email').multiple_emails();
  $('#example_email').change( function(){
    $('#current_emails').text($(this).val());
  });
  });
</script>

<style>
  html body{
    font-family: 'Manjari', sans-serif !important;
  }
  .icome{
    font-size: 11px;
    color: #b3becb;
    text-transform: uppercase;
    font-weight: 600;
  }
  
  .update-1{
    position: relative;
    z-index: 99999;
  }
  .choose{
    position: absolute;
    top:30px;
    left: 33%;
    cursor: pointer;
  }
  .count{
    font-size: 15px;
    color: #778ca2;
    font-weight: bold;
  }
  .count-1{
    font-size: 15px;
    color: #882ef9;
    font-weight: bold;
  }
    .container {
      display: block;
      position: relative;
      color: #bababa;
      padding-left: 35px;
      cursor: pointer;
      font-size: 12px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      font-family: 'Didact Gothic', sans-serif;
    }
    .container-1 {
      display: block;
      position: relative;
      color: black;
      padding-left: 35px;
      cursor: pointer;
      font-size: 12px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      font-family: 'Didact Gothic', sans-serif;
    }
    /* Hide the browser's default checkbox */
    .container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }
    .container-1 input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }
    /* Create a custom checkbox */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 6px;
      height: 17px;
      width: 17px;
      background-color: #eee;
    }
    .checkmark-1 {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 50%;
      height: 17px;
      width: 17px;
      background-color: #eee;
    }
    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
      background-color: #ccc;
    }
    .container-1:hover input ~ .checkmark-1 {
      background-color: #ccc;
    }
    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
      background-color: #882ef9;
    }
    .container-1 input:checked ~ .checkmark-1 {
      background-color: #4fe5bb;
    }
    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }
    .checkmark-1:after {
      content: "";
      position: absolute;
      display: none;
    }
    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
      display: block;
    }
    .container-1 input:checked ~ .checkmark-1:after {
      display: block;
    }
    /* Style the checkmark/indicator */
    .container .checkmark:after {
      left: 5px;
        top: 2px;
        width: 7px;
        height: 11px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
    .container-1 .checkmark-1:after {
      left: 5px;
        top: 2px;
        width: 7px;
        height: 11px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
    .custom-select selected{
      padding: 10px 10px;
    }
    
    .multiple_emails-container { 
    border:1px #ccc solid; 
    border-radius: 4px; 
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075); 
    padding:0; margin: 0; cursor:text; width:100%; 
  }

  .multiple_emails-container input { 
    clear:both; 
    width:100%; 
    border:0; 
    outline: none; 
    margin-bottom:3px; 
    padding-left: 5px; 
  }

  .multiple_emails-container input.multiple_emails-error {	
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px red; 
    outline: thin auto red; 
  }

  .multiple_emails-container ul {	
    list-style-type:none; 
    padding-left: 0; 
  }

  .multiple_emails-email { 
    margin: 3px 5px 3px 5px; 
    padding: 3px 5px 3px 5px; 
    border:1px #BBD8FB solid;	
    border-radius: 3px; 
    background: #F3F7FD; 
  }

  .multiple_emails-close { 
    float:left; 
    margin:0 3px;
  }
  
</style>
<script>
    $(function() {
         $( ".date" ).datepicker({dateFormat: 'yy'});
      });
      $(function() {
         $( ".date_1" ).datepicker({dateFormat: 'yy'});
      });
</script>
  <div class="container-fluid pt-1">
    <!--Valuation Progress start step-->
  
    <div id="form-step-2">
      <form class="needs-validation" novalidate action="{{ url('/add_step_1') }}" method="POST">
 
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
 
        <div class="row m-3">
          <div class="col-md-3 mt-4">
            @include('layouts.inner_nav') 

          </div>
          <div class="col-md-9 pl-0 ml-0 pr-0 mr-0 pb-5" style="background:white;">
            <div class="border-bottom">
              <h5 class="p-1 ml-3 mt-3 font-weight-bold" style="font-size: inherit;">Overview</h5>
            </div>
            <div class="mt-4 fmrs pl-3">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <div class="form-row text-center">
                      <div class="col-md-2 pr-0 text-left">
                          <label for="validationCustom01" class="mt-3 ml-0 mr-0" style="font-size: 13px;">Project Name:</label>
                      </div>
                      <div class="col-md-9 pl-2">
                          <input type="type" class="form-control w-100"  id="validationCustom01" name="project_name" required>
                          <div class="invalid-feedback text-left">
                            Please Fill This Field
                          </div>
                      </div>
                    </div>
                    <div class="form-row text-center">
                      <div class="col-md-2 pr-0 text-left">
                          <label for="validationCustom02" class="mt-3 ml-0 mr-0" style="font-size: 13px;">Target Name:</label>
                      </div>
                      <div class="col-md-9 pl-2">
                        <input type="type" class="form-control w-100" id="validationCustom02" name="target_name" required>
                        <div class="invalid-feedback text-left">
                          Please Fill This Field
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-row text-center">
                        <div class="col-md-2 pr-0 text-left">
                            <label class="mt-3 ml-0 mr-0" style="font-size: 13px;">Target Industry:</label>
                        </div>
                        <div class="col-md-9 pl-2">
                            <select class="custom-select browser-default" required name="target_industry" id="industry">
                              <option value="">Please Select</option>
                           @for($k=0; $k < count($overview_data_array['overview']); $k++)
                                <option value="{{ $overview_data_array['overview'][$k]->id }}" id="{{ $overview_data_array['overview'][$k]->industries_name }}">{{ $overview_data_array['overview'][$k]->industries_name }}</option>
                            @endfor
 
 
                            </select>
                            <div class="invalid-feedback text-left">
                              Please select one Option
                            </div>
                        </div>
                      </div>
                    
                      <div id="sector_value"></div>
                      
                      <div class="form-row text-center">
                        <div class="col-md-2 pr-0 text-left">
                            <label class="mt-3 ml-0 mr-0" for="validationCustom03" style="font-size: 13px;">Target Description:</label>
                        </div>
                        <div class="col-md-9 pl-2">
                            <textarea type="type" class="form-control w-100" rows="3" id="validationCustom03" name="target_description" required></textarea>
                            <div class="invalid-feedback text-left">
                              Please Fill This Field
                            </div>
                        </div>
                      </div>
                      <div class="form-row text-center">
                        <div class="col-md-2 pr-0 text-left">
                            <label for="validationCustom04" class="mt-3 ml-0 mr-0" style="font-size: 13px;">Target Location:</label>
                        </div>
                        <div class="col-md-9 pl-2 text-left">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-map-marker" style="font-size: 22px;"></i>
                                </div>
                              </div>
                              <input type="text" class="form-control" id="validationCustom04" aria-label="Text input with checkbox" name="target_location" required>
                              <div class="invalid-feedback text-left">
                                Please Select Location
                              </div>
                            </div>
                        </div>
                      </div>
                      <!-- Button trigger modal -->
                      <div class="form-row text-center">
                        <div class="col-md-2 pr-0 text-left">
                            <label class="mt-3 ml-0 mr-0" style="font-size: 13px;">Participants:</label>
                        </div>
                        <div class="col-md-9 pl-2 mt-2 pt-1 text-left">
                            <a href="#"  data-toggle="modal" data-target="#exampleModal" class="htrh" style="color:#ab39fa !important;"><i class="fa fa-plus-circle"></i> Invite Participants</a>
                        </div>
                      </div>
                      <div class="form-row text-center">
                        <div class="col-md-2 pr-0 text-left">
                            <label for="date" class="mt-3 ml-0 mr-0" style="font-size: 13px;">Valuation Start Year</label>
                        </div>
                        <div class="col-md-9 pl-2">
                            <input type="text" class="form-control w-100 datepicker date" id="txtFrom" name="valuation_start_date" required  placeholder="Selected date">
                            <div class="invalid-feedback text-left">Please select a valid date.</div>
                        </div>
                      </div>
                      <div class="form-row text-center">
                        <div class="col-md-2 pr-0 text-left">
                            <label class="mt-3 ml-0 mr-0" style="font-size: 13px;">Valuation Terminal Year</label>
                        </div>
                        <div class="col-md-9 pl-2">
                            <input type="text" class="form-control datepicker date_1" id="txtTo" name="valuation_end_date" placeholder="Selected date" required>
                            <div class="invalid-feedback text-left">Please select a date.</div>
                        </div>
                      </div>
                      <div class="form-row text-center">
                        <div class="col-md-2 pr-0 text-left">
                            <label class="mt-3 ml-0 mr-0" style="font-size: 13px;">Period Options:</label>
                        </div>
                        <div class="col-md-9 pl-2">
                            <select class="custom-select browser-default" required name="period_options">
                              <option value="">Please Select</option>
                              <option value="Monthly">Monthly</option>
                              <option value="Quarterly">Quarterly</option>
                              <option value="Yearly">Yearly</option>
                            </select>
                            <div class="invalid-feedback text-left">
                              Please select one Option
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div>
                  <p style="font-size:12px;">Update by <span style="color:#ab39fa;">Barry </span>- 15:00. 01/01/2019</p>
                </div>
                <div class="form-row border-top">
                  <div class="col-md-6 mt-4">
                      <button type="button" class="bnt-20 w-25">Previous</button>
                  </div>
                  <div class="col-md-6 mt-4 pr-5 text-right">
                      <button type="submit" class="bnt-21 w-25" id="btn-1-1">Next</button>
                  </div>
                </div>
              </div>
          </div>
        </div>
        
      </form>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="p-0">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="background:#f8fafb;">
    
    <form class="needs-validation" novalidate action="{{ url('/send_invite_participant') }}" method="POST">
 
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" name="f_name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control" name="l_name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone Number</label>
                  <input type="Number" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Role</label>
                  <select id="" class="form-control" name="role">
                    <option value="super_contributor">Super Contributor</option>
                    <option value="contributor">Contributor</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Invite members</label>
                  <!--<input type="Number" class="form-control">-->
                  <input type='text' id='example_email' class='form-control'>
                </div>
                
                <div class="row pl-0 ml-0 mr-0 pr-0 pt-3 pb-3">
              <div class="col-md-6">
                  <button type="submit" class="btn w-50" style="background:#882ef9 !important; color:white;font-size:14px; font-weight:500;">ADD</button>
              </div>
              <div class="col-md-6 text-right">
                <button type="button" class="btn w-50" style="background:#f2f4f6;color:#798da3; font-size:14px; font-weight:500;" data-dismiss="modal">CANCEL</button>
              </div>
            </div>
            
              </form>
          </div>
            
          </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $("#txtFrom").datepicker({
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#txtTo").datepicker("option", "minDate", dt);
        }
    });
    $("#txtTo").datepicker({
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#txtFrom").datepicker("option", "maxDate", dt);
        }
    });
  } );
</script>
<script>
  (function() {
    'use strict';
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    }
    form.classList.add('was-validated');
    }, false);
    });
    }, false);
    })();


  $(function(){
      $('#addMore').on('click', function() {
                var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                data.find("input").val('');
        });
        $(document).on('click', '.remove', function() {
            var trIndex = $(this).closest("tr").index();
              if(trIndex>1) {
                $(this).closest("tr").remove();
              } else {
                alert("Sorry!! Can't remove first row!");
              }
        });
      });      
  </script>




<script>

$(document).ready(function (){

        $('#industry').change(function(){
            
            var industry_id = $('#industry').val();
            // alert(industry_id);
            // return false;

            var van="{{ url('/') }}";
            
            // alert(van+'/get_sectors'+industry_id);
            // return false;
            
            $.ajax({
                url:van+'/get_sectors/'+industry_id,
                async:false,
                success: function(result)
                {
                    // alert(result);
                    
                    $("#sector_value").html(result);
                }

            });
            
      });
});


</script>


<script>
      (function( $ ){
 
 $.fn.multiple_emails = function() {
   
   return this.each(function() {
     var $orig = $(this);
     $list = $('<ul class="multiple_emails-ul" />'); // create html elements - list of email addresses as unordered list

     if ($(this).val() != '') {
       $.each(jQuery.parseJSON($(this).val()), function( index, val ) {
         $list.append($('<li class="multiple_emails-email"><span class="email_name"><input name="invite_members[]" class="form-control type="text" value="'+ val + '" style="background: #F3F7FD; border:none !important"></span></li>')
           .prepend($('<a href="#" class="multiple_emails-close" title="Remove"><i class="fa fa-times text-danger pt-2"></i></a>')
              .click(function(e) { $(this).parent().remove(); refresh_emails(); e.preventDefault(); })
           )
         );
       });
     }
     
     var $input = $('<input type="text" class="multiple_emails-input text-left" />').keyup(function(event) { // input

       $(this).removeClass('multiple_emails-error');
       var input_length = $(this).val().length;
       
       //if(event.which == 8 && input_length == 0) { $list.find('li').last().remove(); }
       if(event.which == 13 || event.which == 32 || event.which == 188) { // key press is enter, space or comma
          
         var val = $(this).val().slice(0, -1); // remove space/comma from value
          
         var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
         if (pattern.test(val) == true) {
            $list.append($('<li class="multiple_emails-email"><span class="email_name"><input name="invite_members[]" class="form-control type="text" value="'+ val + '" style="background: #F3F7FD; border:none !important"></span></li>')
               .prepend($('<a href="#" class="multiple_emails-close" title="Remove"><i class="fa fa-times text-danger pt-2"></i></a>')
                  .click(function(e) { $(this).parent().remove(); refresh_emails(); e.preventDefault(); })
               )
           );
           refresh_emails ();
           $(this).val('');
         }
         else { $(this).val(val).addClass('multiple_emails-error'); }
       }
     });

     var $container = $('<div class="multiple_emails-container" />').click(function() { $input.focus(); } ); // container div

     $container.append($list).append($input).insertAfter($(this)); // insert elements into DOM

     function refresh_emails () {
       var emails = new Array();
       $('.multiple_emails-email span.email_name').each(function() { emails.push($(this).html());	});
       $orig.val(JSON.stringify(emails)).trigger('change');
     }
     
     return $(this).hide();

         });
   
    };
 

  
})(jQuery);
</script>


<script type="text/javascript">
  var gaq = gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


@endsection
