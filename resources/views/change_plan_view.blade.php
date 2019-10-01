@extends('layouts.app')

@section('content')

@extends('layouts.nav')

<script>
    $(document).ready(function (){
        $('.icns').click(function(){
            $('.icns-1').removeClass("active");
            $(".box").css({'dispaly': 'block'});
            $(".incs-3").css({'dispaly': 'none'});
            $('.box').show();
            $("#plan_value").val('9.99');
            $("#plan_name").val('unlimited');
            $('.icns-2').show();
            $(".box-1").hide();
            $(".icns-3").hide();
            $(this).addClass("active");
        });
        $('.icns-1').click(function(){
            $('.icns').removeClass("active");
            $(".box-1").css({'dispaly': 'block'});
            $(".icns-3").css({'dispaly': 'block'});
            $('.box-1').show();
            $("#plan_value").val('2.99');
            $("#plan_name").val('one');
            $('.icns-3').show();
            $(".box").hide();
            $(".icns-2").hide();
            $(this).addClass("active");
        });
        $('.save_plan').click(function(){
            $('.credit_card_info').css({'display':'block'});
            $('.credit_card_info').show();
            $('.choose_plan').hide();
        });
    })
</script>
<script>
    $(document).ready(function () {
            $("#sign_up").click(function () {


            var card_validate =$('.card_validation').val();
             if(card_validate == ''){
                $('.card_validation').css('border-color','red'); 
                $("#checkcard").text("Card Name is Required");
                return false;
             }
             else{

                $('.card_validation').css('border-color','#c2cad8');
                $("#checkcard").text("");
             } 

             var card_number_validate =$('.cardNumner_validation').val();
             if(card_number_validate.length != 16){
                $('.cardNumner_validation').css('border-color','red'); 
                $("#checkcard_number").text("16 Number is Required");
                return false;
             }
             else{

                $('.cardNumner_validation').css('border-color','#c2cad8');
                $("#checkcard_number").text("");
             }

             var cvc_validate =$('.cvc_validation').val();
             if(cvc_validate.length != 3){
                $('.cvc_validation').css('border-color','red'); 
                $("#check_cvc").text("3 Number is Required");
                return false;
             }
             else{

                $('.cvc_validation').css('border-color','#c2cad8');
                $("#check_cvc").text("");
             }


            var month_validate = $('.month_validation').val();
            console.log(month_validate);
            if(month_validate > 12 || month_validate < 1){
                $('.month_validation').css('border-color','red'); 
                $("#check_month").text("Month is Not Valid");
                return false;
             }
             else{

                $('.month_validation').css('border-color','#c2cad8');
                $("#check_month").text("");
             }

            var year_validate = $('.year_validation').val();
              if (year_validate > 2050 || year_validate < 1900) {
                $('.year_validation').css('border-color','red'); 
                $("#check_year").text("Year is Not Valid");
                return false;
             }
             else{

                $('.year_validation').css('border-color','#c2cad8');
                $("#check_year").text("");
             }


            });
        });
</script>

<style type="text/css">
    

.autocomplete {
  position: relative;
  display: inline-block;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

    .active{
            color: #1665d8;
            border: 2px solid #1665d8;
        }

.icns-3{
    color: white;
    font-size: 20px !important;
    position: absolute;
    background-color: #1665d8;
    padding: 10px 10px;
    border-radius: 50%;
    top: 35%;
    left: 64%;
    display: none;
}

html body{
    font-family: 'Manjari', sans-serif !important;
 }
.imags---{
	display: block;
	max-width: 400px;
    margin: 0 auto 15px;
	text-align: center;
    word-wrap: break-word;
	color: #1a4756;
}
.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    display: none;
}
.circle {
    overflow: hidden;
    width: 128px;
    height: 128px;
    position: relative;
    top: 0px;
    left: 50%;
    margin-bottom: 10px;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
    position: absolute;
    top: 14px;
    right: 38px;
    color: #050505;
    opacity: 0;
    font-size: 100px;
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    cursor: pointer;
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
.hidden, #uploadImg:not(.hidden) + .imags---{
	display: none;
}

#file{
	display: none;
  	margin: 0 auto;
}
[type=reset], html [type=button] {

    padding: 2px 10px;
    background-color: #ab39fa;
    color: white;
    border: 1px solid #ab39fa;
    border-radius: 3px;
    margin-top: 10px;
}
.active{
        color: #1665d8;
        border: 2px solid #1665d8;
    }
    .icns-3{
        color: white;
        font-size: 20px !important;
        position: absolute;
        background-color: #1665d8;
        padding: 10px 10px;
        border-radius: 50%;
        top: 35%;
        left: 63%;
        display: none;
    }
    .icns-2{
        top:41% !important;
        left:31% !important;
    }
    .icns-3{
        top:41% !important;
    }
    .credit_card_info{
        display:none;
    }
</style>
<form role="form" action="{{ url('update_plan') }}" method="post" class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="pk_test_5f4q3aLF1SgN7kQdEV6WBSnn"
                    id="payment-form">

                    @csrf
                    
<div class="row pt-5 m-auto text-center">
    <div class="col-md-3"></div>
    <div class="col-md-6 choose_plan">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title m-auto pt-3" style="font-weight: 600;">Choose Your Plan</h5>
              <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center mt-5">
                <span class="">
                    <i class="fa fa-building icns active">
                        <h6 class="text-2">Unlimited</h6>
                        <i class="fa fa-check icns-2"></i>
                    </i>
                </span>
                <span class="ml-3">
                    <i class="fa fa-building icns-1">
                        <h6 class="text-2">One</h6>
                        <i class="fa fa-check icns-3"></i>
                    </i>
                </span>
                <div class="box">
                    <h3 class="heading-8 mt-5 pt-3">$9.99/m</h3>
                    <p class="pera-6 pl-4 pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias expedita possimus, consequatur incidunt </p>
                </div>
                <div class="box-1">
                    <h3 class="heading-8 mt-5 pt-3">$2.99/m</h3>
                    <p class="pera-6 pl-4 pt-4">Dolor sit amet consectetur adipisicing elit. Molestias expedita possimus, consequatur incidunt </p>
                </div>
                <div class="col-md-8 m-auto">
                    <input type="hidden" value="" id="form-121" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
              <a href=""  data-toggle="modal" data-target="#exampleModal-2" class="btn btn-primary save_plan">Save changes</a>
            </div>
            
            
                <input type="hidden" name="plan_value" id="plan_value" value="9.99">
        <input type="hidden" name="plan_name" id="plan_name" value="unlimited">

            
            
          </div>
    </div>
    <div class="col-md-3"></div>
    <div class="modal-content border-0 credit_card_info" style="background-color: #f4f7fa;" >
    <div class="modal-body text-center ml-5 mr-5">
        <div class="text-left p-4">
             

                <div class="modal-dialog" style="max-width: 600px !important;">
                    <div class="modal-content border-0 modl" style="padding-bottom: 41px !important;" >
            
                <div class="col-sm-11 m-auto text-left p-3  border-bottom" style="background-color: white;">
                    <div class=" bg-none border-0 mt-4 " style="background-color: transparent !important;">
                        <label for="" class="float-left mt-1 ml-3" style="font-weight: 600;">Credit Card</label>
                        <div class="text-right">
                            <img src="{{ URL('/public') }}/public_site_assets/img/Credit.Logos.png" class="" alt="">
                        </div><br>
                        
                        <p class="text-left ml-3" style="font-size: 12px; width:85%; color: #a2a1a1;">A global payment technology company that connects consumers, businesses, financial institutions.</p>
                    </div>
                </div>

                    <div class='form-row row pl-4 pr-4 pt-3'>
                        <div class='col-12 form-group '>
                            <label class='control-label w-100'>Name on Card  <img src="{{ URL('/public') }}/public_site_assets/img/lock.png" class="float-right" alt=""></label>
                           
                             <input class='form-control frm card_validation' type='text'>
                             <span id="checkcard"></span>
                        </div>
                    </div>

                    <div class='form-row row pl-4 pr-4 pt-3'>
                        <div class='col-6 form-group card border-0 '>
                            <label class='control-label'>Card Number<img src="{{ URL('/public') }}/public_site_assets/img/question.PNG" width="26px" class="float-right" alt=""></label>
                            
                             <input autocomplete='off' class='form-control card-number cardNumner_validation' 
                                type='text'>
                            <span id="checkcard_number"></span>
                        </div>
                          <div class='col-6 form-group cvc '>
                            <label class='control-label'>CVC</label> <input autocomplete='off'


                                class='form-control card-cvc w-100 cvc_validation' placeholder='ex. 311' 
                                type='text'>
                                <span id="check_cvc"></span>
                        </div>
                    </div>

                    <div class='form-row row pl-4 pr-4 pt-3'>
                      
                        <div class='col-6 form-group expiration '>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control w-100 card-expiry-month month_validation' placeholder='MM'
                                type='text'>
                                <span id="check_month"></span>
                        </div>
                        <div class='col-6 form-group expiration '>
                            <label class='control-label'>Expiration Year</label> <input
                            class='form-control w-100 card-expiry-year year_validation' placeholder='YYYY' 
                                type='text'>
                            <span id="check_year"></span>
                        </div>
                    </div>

                  

                    <div class="row pl-4 pr-4 pt-3">
                        <div class="col-9 m-auto">
                            <button class="btn btn-primary w-100 btn-block" id="sign_up" style="background-color: #882ef9 !important;border:1px solid #882ef9 !important;" type="submit">Update</button>
                        </div>
                    </div>
                      
                
                
            </div>
        </div>
    </div>
</div>
</div>

</form>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>

         
@endsection