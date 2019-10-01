   @extends('layouts.app')

@section('content')


<?php

// print_r($get_companies_name);
// die;

$company_array = array();

for ($i=0; $i < count($get_companies_name); $i++) 
{
    $company_array[] = $get_companies_name[$i]->company_name;
}

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
            $("#step-1122").click(function () {

            var name_validate =$('.name_validation').val();
             if(name_validate == ''){
                $('.name_validation').css('border-color','red'); 
                $("#checkname").text("Full Name is Required");
                return false;
             }
             else{

                $('.name_validation').css('border-color','#c2cad8');
                $("#checkname").text("");
                
             } 

             var pattern = /^\b[A-Z0-9._%-+]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
             var email_validate=$('.email_validation').val();
             if(!pattern.test(email_validate)){
                $('.email_validation').css('border-color','red'); 
                $("#checkEmail").text("Correct Email Formet");
                 // alert('not a valid e-mail address');     
                return false;
             }
             else{
                 $('.email_validation').css('border-color','#c2cad8');
                 $("#checkEmail").text("");
             } 

             var password_validate =$('.passsword_validation').val();
             if(password_validate == ''){
                $('.passsword_validation').css('border-color','red'); 
                $("#checkpassword").text("Password is Required");
                return false;
             }
             else{

                $('.passsword_validation').css('border-color','#c2cad8');
                $("#checkpassword").text("");
                
             } 


            var c_password_validate =$('.c_password_validation').val();
             if(c_password_validate != password_validate){
                $('.c_password_validation').css('border-color','red'); 
                $("#confermpassword").text("Password is Not Match");
                return false;
             }
             else{

                $('.c_password_validation').css('border-color','#c2cad8');
                $("#confermpassword").text("");
                // $("#step-3").css({'dispaly': 'block'});
                // $("#step-2").hide();
                // $("#step-3").show();
                
             }    
            //  alert("hello");
            //  return false;
             
             var company_validate =$('.company_validation').val();
             if(company_validate == ''){
                $('.company_validation').css('border-color','red'); 
                $("#check_company").text("Company Name is Required");
                return false;
             }
             else{

                $('.company_validation').css('border-color','#c2cad8');
                $("#check_company").text("");
                // $("#step-5").css({'dispaly': 'block'});
                // $("#step-6").hide();
                // $("#step-5").show();
                
             } 
             
             
             

            });
        });



        // *********END****************
    </script>

<section class="bg-images p-0 m-0">
        <div class="pt-md-5 pt-0">
            <div class="mt-5 ">
                <div class="modal-dialog" role="document" id="step-8">
                    <div class="modal-content border-0 modl" id="step-6">
                        <div class="modal-header border-0">
                            <h5 class="modal-title m-auto pt-3" style="font-weight: 600;">Create Account</h5>
                        </div>
                        <div class="modal-body">


                             <div id="step-2">

                                @if (Session::has('message'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('message') }}</p>
                                    </div>
                                @endif

                                <form role="form" action="{{ url('add_new_user') }}" method="post" class="require-validation"
                                data-cc-on-file="false" id="contact-form">

                                @csrf

                                    <div class="form-group col-sm-9 m-auto pt-4">
                                        <label style="font-weight: 600;">Full Name</label>
                                        <input type="text" class="form-control frm name_validation"  aria-describedby="name" placeholder="" name="full_name">
                                        <span id="checkname">
                                            
                                        </span>
                                    </div>
                                    <div class="form-group col-sm-9 m-auto pt-4">
                                        <label for="exampleInputEmail1" style="font-weight: 600;">Email address</label>
                                        <input type="email" class="form-control email_validation"  aria-describedby="emailHelp" placeholder="Your email" name="email">
                                        <span id="checkEmail">
                                            
                                        </span>
                                    
                                    </div>
                                    <div class="form-group col-sm-9 m-auto pt-4">
                                        <label for="exampleInputPassword1" style="font-weight: 600;">Password</label>
                                        <input type="password"  class="form-control passsword_validation" placeholder="Enter your Password" name="password">
                                         <span id="checkpassword">
                                            
                                        </span>
                                    </div>
                                    <div class="form-group col-sm-9 m-auto pt-4">
                                        <label for="exampleInputPassword1" style="font-weight: 600;">Confirm Password</label>
                                        <input type="password"  class="form-control c_password_validation" placeholder="Enter your Password">
                                        <span id="confermpassword">
                                            
                                        </span>
                                    </div>
                                    
                                    
                                    <div class="form-group col-sm-9 m-auto pt-4">
                                        <label style="font-weight: 600;">Role</label>
                                        <select class="form-control frm" name="role">
                                            <option value="Administrator">Administrator</option>
                                            <option value="contributor">Contributor</option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group col-sm-9 m-auto pt-4">
                                        <label for="exampleInputEmail1" style="font-weight: 600;">Company Name</label>
                                        <div class="autocomplete" style="width:320px;">
                                            <input type="text" id="myInput" class="form-control company_validation"  aria-describedby="emailHelp" placeholder="Your campany name" name="company_name">
                                            <span id="check_company"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-9 m-auto pt-4">
                                    <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Lej2rUUAAAAAPk-R-Ca6wCwUDOGX6p-r3j9Yu3H" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                        
                                    <div class="col-sm-9 m-auto pt-4">
                                        <button type="submit" id="step-1122" class="btn btn-primary w-100" style="background-color: #882ef9 !important;border:1px solid #882ef9 !important;">SignUp</button>
                                    </div>
                                    <p class="text-secondary text-center mt-4" style="font-size: 14px;">All ready have an account?<a href="{{url('/login')}}" class="text-info ml-3" style="font-weight: 600">Login here</a></p>
</form>
                            </div> 

                        </div>
                    </div>

                </div>


               
            </div>
        </div>
      
    </section>


        <script src='https://www.google.com/recaptcha/api.js'></script>

<script>
    
    $(function () {

    window.verifyRecaptchaCallback = function (response) {
        $('input[data-recaptcha]').val(response).trigger('change')
    }

    window.expiredRecaptchaCallback = function () {
        $('input[data-recaptcha]').val("").trigger('change')
    }

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                        grecaptcha.reset();
                    }
                }
            });
            return false;
        }
    })
});
    
    
</script>


<script type="text/javascript">
    
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
      var pos = arr[i].toUpperCase().indexOf(val.toUpperCase());
        /*check if the item starts with the same letters as the text field value:*/
        if (pos > -1) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = arr[i].substr(0, pos);
          b.innerHTML += "<strong>" + arr[i].substr(pos, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(pos + val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/

var countries = <?php echo json_encode($company_array); ?>


//var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);

</script>






@endsection
