   @extends('layouts.app')

@section('content')


<?php

// print_r($get_companies_name);
// die;

// $company_array = array();

// for ($i=0; $i < count($get_companies_name); $i++) 
// {
//     $company_array[] = $get_companies_name[$i]->company_name;
// }

//  print_r($company_array);
// die;


?>

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
</style>

    <script>


      // *****************ZAID******************** 

      // ****************FOR VALIDATION **********

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

        // *********END****************

        $(document).ready(function(){
            $('.icns').click(function(){
                $('.icns-1').removeClass("active");
                $(".box").css({'dispaly': 'block'});
                $("#plan_value").val('9.99');
                $("#plan_name").val('unlimited');
                $('.box').show();
                $('.icns-2').show();
                $(".box-1").hide();
                $(".icns-3").hide();
                $(this).addClass("active");
            });
        });
        $(document).ready(function(){
            $('.icns-1').click(function(){
                $('.icns').removeClass("active");
                $(".box-1").css({'dispaly': 'block'});
                $(".icns-3").css({'dispaly': 'block'});
                $("#plan_value").val('2.99');
                $("#plan_name").val('one');
                $('.box-1').show();
                $('.icns-3').show();
                $(".box").hide();
                $(".icns-2").hide();
                $(this).addClass("active");
            });
        });
        $(document).ready(function(){
            $("#step-9").click(function(){
                $("#step-7").css({'dispaly': 'block'});
                $('#step-7').show();
                $("#step-8").hide();
            });
        })
    </script>

<section class="bg-images p-0 m-0">
        <div class="pt-md-5 pt-0">
            <div class="mt-5 ">
                <div class="modal-dialog" role="document" id="step-8">
                    
                    <div class="modal-content border-0 modl">
                        
                        @if (Session::has('message'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('message') }}</p>
                                    </div>
                                @endif

                                <form role="form" action="{{ url('add_new_user_payment') }}" method="post" class="require-validation"
                                data-cc-on-file="false"
                                data-stripe-publishable-key="pk_test_5f4q3aLF1SgN7kQdEV6WBSnn"
                                id="payment-form">

                                @csrf



                        <div class="modal-header border-0">
                            <h5 class="modal-title m-auto pt-3" style="font-weight: 600;">Choose Your Plan</h5>
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
                            <div class="col-sm-9 m-auto pt-5">
                                <button type="button" id="step-9" class="btn btn-primary w-100" style="background-color: #882ef9 !important;border:1px solid #882ef9 !important;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>


    <input type="hidden" name="plan_value" id="plan_value" value="9.99">
        <input type="hidden" name="plan_name" id="plan_name" value="unlimited">
<input type="hidden" name="user_id" id="user_id" value="<?php print_r($decrypted); ?>">

                    <div class="modal-dialog" style="max-width: 600px !important;" id="step-7">
                        <div class="modal-content border-0 modl" >
                            <div class="modal-header border-0">
                                <h5 class="modal-title m-auto pt-3" style="font-weight: 600;">Choose Your Payments Method</h5>
                            </div>
                                  
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
                                <button class="btn btn-primary w-100 btn-block" id="sign_up" style="background-color: #882ef9 !important;border:1px solid #882ef9 !important;" type="submit">Sign Up</button>
                            </div>
                        </div>
                          
                    </form>




                        </div>
                    </div>
                   
               
            </div>
        </div>
      
    </section>


        

        
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
