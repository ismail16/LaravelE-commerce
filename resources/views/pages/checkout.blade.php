@extends('master')
@section('content')

<script type="text/javascript">
    $(document).ready(function(){
        $('.is-home').css('display', 'none');
    });
</script>

<script type="text/javascript">
    //Create a boolean variable to check for a valid Internet Explorer instance.
    var xmlhttp = false;
    //Check if we are using IE.
    try {
        //If the Javascript version is greater than 5.
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        //alert(xmlhttp);
        //alert ("You are using Microsoft Internet Explorer.");
    } catch (e) {
        //alert(e);
        //If not, then use the older active x object.
        try {
        //If we are using Internet Explorer.
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        //alert ("You are using Microsoft Internet Explorer");
        } catch (E) {
        //Else we must be using a non-IE browser.
            xmlhttp = false;
        }
    }

    //alert(typeof XMLHttpRequest1221);
    //If we are using a non-IE browser, create a javascript instance of the object.
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
        //alert ("You are not using Microsoft Internet Explorer");
    }

    function makerequest(email_address, objID){
        // alert(given_text);
        //var obj = document.getElementById(objID);
        //serverPage='search.php?text='+given_text+'&abc='+d23;
        serverPage = 'ajax-email-check/' + email_address;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            //alert(xmlhttp.readyState);
            //alert(xmlhttp.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //alert(xmlhttp.responseText);
                document.getElementById(objID).innerHTML = xmlhttp.responseText;
                //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                if (xmlhttp.responseText == 'Alerdy Exists !')
                {
                    document.getElementById('c_button').disabled = true;
                }
                if (xmlhttp.responseText == 'Avilable')
                {
                    document.getElementById('c_button').disabled = false;
                }
            }
        }
        xmlhttp.send(null);
    }
</script>

<div class="columns-container">
    <div class="container" id="columns">
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigati    on-pipe">&nbsp;</span>
            <span class="navigation_page">Checkout</span>
        </div>

        <h2 class="page-heading"><span class="page-heading-title2">Checkout</span></h2>

        <div class="page-content checkout-page">
            <h3 class="checkout-sep">Login/ Register</h3>
            <div class="box-border">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Login</h4>
                        <p>Already registered? Please log in below:</p>
                        {!! Form::open(['url' => '/login-customer', 'method'=>'post']) !!}
                        <label>Email address</label>
                        <input type="text" name="customer_email_address" class="form-control input" required>
                        <label>Password</label>
                        <input type="password" name="customer_password" class="form-control input" required>
                        <p><a href="#">Forgot your password?</a></p>
                        <button class="button">Login</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <h3 class="checkout-sep">2. Registration</h3>
            <div class="box-border">
                <ul>
                    {!! Form::open(['url' => '/save-customer', 'method'=>'post']) !!}
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="first_name" class="required">First Name</label>
                            <input type="text" class="input form-control" name="first_name" id="first_name" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="last_name" class="required">Last Name</label>
                            <input type="text" name="last_name" class="input form-control" id="last_name">
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" class="input form-control" id="company_name">
                        </div>
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email Address</label>
                            <input type="text" class="input form-control" name="email_address" onkeyup="makerequest(this.value, 'res')" id="email_address" required>
                            <span id='res' style="color:red"></span>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="password" class="required">Password</label>
                            <input class="input form-control" type="password" name="password" id="password" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="confirm" class="required">Confirm Password</label>
                            <input class="input form-control" type="password" name="" id="confirm" required>
                        </div>
                    </li>
                    <li class="row"> 
                        <div class="col-xs-6">
                            <label for="address" class="required">Address</label>
                            <input type="text" class="input form-control" name="address" id="address" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="telephone" class="required">Moble</label>
                            <input class="input form-control" type="text" name="mobile_number" id="telephone" required>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="city" class="required">City</label>
                            <input class="input form-control" type="text" name="city" id="city">
                        </div>
                        <div class="col-sm-6">
                            <label for="postal_code" class="required">Zip/Postal Code</label>
                            <input class="input form-control" type="text" name="zip_code" id="postal_code">
                        </div>
                    </li>
                    <li class="row">
                        <div  class="col-sm-6">
                            <label class="required">Country</label>
                            <select class="input form-control" name="country">
                                <option value="USA">Bangladesh</option>
                                <option value="Australia">India</option>
                                <option value="Austria">Pakistan</option>
                                <option value="Argentina">Nepal</option>
                            </select>
                        </div>
                    </li>
                    </li>
                    <li>
                        <button type="submit" id="c_button" class="button">Continue</button>
                    </li>
                    {!! Form::close() !!}
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection