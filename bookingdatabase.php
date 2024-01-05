<!DOCTYPE html>
<html>
<head>
	<title>picshort booking form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');

* {
    box-sizing: border-box;
    margin: 0px;
    padding: 0px;
}

body {
    background-image: url('https://images.pexels.com/photos/1444442/pexels-photo-1444442.jpeg');
    background-size: cover;
    font-family: 'Open Sans', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
    transition-timing-function: ease-in;
}
span{
    color: red;
}
label{
    color: white;
}
small{
    font-size: 1rem;
}
.column{
    display: flex;
}

		.container {
    background-color: #000000bd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    width: 55vw;
    align-items: center;
    max-width: 100%;
    margin: 20px 0px;
}

.form {
    padding: 30px 40px; 
}

.form-control{
    margin-bottom: 20px;
}

.form-control label {
    display: inline-block;
    margin-bottom: 5px;
}

.form-control input {
    border: 4px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    font-family: inherit;
    font-size: 14px;
    padding: 10px;
    width: 100%;
}

.form-control input:focus {
    outline: 0;
    border-color: #777;
}
.btn {
    background-color: #8e44ad;
    border: 2px solid #8e44ad;
    border-radius: 4px;
    cursor: pointer;
    color: #fff;
    display: block;
    font-family: inherit;
    font-size: 16px;
    font-weight: bolder;
    padding: 10px;
    margin-top: -72px;
    width: 80%;
    margin-bottom: 20px;
}
.btn:hover{
    background-image: linear-gradient(to right, #591177 , #c44eea);
    }
#pincode{
	width: 10rem;
}
#address{
    height: 5rem;
    width: 42rem;
}
.errorl{
	margin-left: 337px;
    font-weight: bolder;
    font-size: 19px;
}
#fa-check-circle1{
	color: #e9e9f100;
	position: relative;
    top: -34px;
    right: -640px;
}
#fa-exclamation-circle1{
	color: #f1e7e900;
}
#fa-check-circle2{
	color: #e9e9f100;
	position: relative;
    top: -34px;
    right: -645px;
}
#fa-exclamation-circle2{
	color: #f1e7e900;
}
#fa-check-circle3{
	color: #e9e9f100;
	position: relative;
    top: -35px;
    right: -307px;
}
#fa-exclamation-circle3{
	color: #f1e7e900;
}
#fa-check-circle4{
	color: #e9e9f100;
	position: relative;
    top: -36px;
    right: -145px;
}
#fa-exclamation-circle4{
	color: #f1e7e900;
}
#fa-check-circle5{
	color: #e9e9f100;
	position: relative;
    top: -51px;
    right: -303px;
}
#fa-exclamation-circle5{
	color: #f1e7e900;
}
#addressmove{
	margin-left: 235px;
}
#date{
	width: 200px;
}
#pincodeerror{
	margin-left: -5px;
}


	</style>
</head>
<body>
	<div class="container">
<div class="container">
    <form id="form" class="form" onsubmit="return validation()" method="POST">
        <div class="form-control">
            <label for="name">Client's Full Name <span>*</span></label>
            <input type="text" placeholder="e.g - manish kumar" id="name" name="cnm">
            <i class="fas fa-check-circle" id="fa-check-circle1" class="erroricon"></i>
            
            <span id="nameerror" style="color:red;" class="errorl"></span>
            
        </div>
        <div class="form-control">
            <label for="email">Client's Email Id <span>*</span></label>
            <input type="email" placeholder="e.g - manish@gmail.com" id="email"  name="cemail">
            <i class="fas fa-check-circle" id="fa-check-circle2" class="erroricon"></i>
            
            <span id="emailerror" class="errorl" style="color:red;"></span>
            
        </div>
        <div class="form-control">
            <label >Client's Phone Number <span>*</span></label>
            <input type="text" placeholder="e.g - 7256040074" id="phone" name="cphn"><span id="phoneerror" class="errorl" style="color:red;"></span>
            <i class="fas fa-check-circle" id="fa-check-circle3" class="erroricon"></i>
            
            
        </div>
        
            <div class="form-control"> 
            <label>APPOINMENT Address <span>*</span></label><textarea type="text" rows = "9" placeholder="your address"  name="caddress" id="address" ></textarea>
            <span id="addresserror" class="errorl" style="color:red;"></span>
            <i class="fas fa-check-circle" id="fa-check-circle5" class="erroricon"></i>
            <br/>
            
             </div>

        <div class="column">
        	<div class="form-control"> 
            <label for="name">Address Pin Code <span>*</span></label>
            <input type="text" placeholder="e.g - 801503" id="pincode"  name="cpincode"><span id="pincodeerror" class="errorl" style="color:red;"></span>
            <i class="fas fa-check-circle" id="fa-check-circle4" class="erroricon"></i>
            <i class="fas fa-exclamation-circle" id="fa-exclamation-circle4" class="erroricon"></i>
            </div>
            </div> 
            </div>
        <center><input type="submit" name="sumbit" value="SUBMIT" class="btn"></center>
    </form>
</div>
</div><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
function validation(){
	var name=document.getElementById("name").value;
            var namecheck =/^[A-Za-z. ]{1,30}$/ ;

            if(namecheck.test(name)){
				document.getElementById('nameerror').innerHTML = " ";
				document.getElementById('fa-check-circle1').style.color="#17c117";
				document.getElementById('name').style.borderColor="#17c117";
			}
			else{
				document.getElementById('nameerror').innerHTML = " **please enter valid name**";
				document.getElementById('name').style.borderColor="red";
				return false;
			}

			var email=document.getElementById("email").value;
            var emailcheck =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ ;

            if(emailcheck.test(email)){
				document.getElementById('emailerror').innerHTML = " ";
				document.getElementById('fa-check-circle2').style.color="#17c117";
				document.getElementById('email').style.borderColor="#17c117";
			}
			else{
				document.getElementById('emailerror').innerHTML = " **please enter valid email**";
				document.getElementById('email').style.borderColor="red";
				return false;
			}

			var phone=document.getElementById("phone").value;
            var phonecheck =/^[0-9]{10}$/ ;

            if(phonecheck.test(phone)){
				document.getElementById('phoneerror').innerHTML = " ";
				document.getElementById('fa-check-circle3').style.color="#17c117";
				document.getElementById('phone').style.borderColor="#17c117";
			}
			else{
				document.getElementById('phoneerror').innerHTML = " **please enter valid phone**";
				document.getElementById('phone').style.borderColor="red";
				return false;
			}

			var address=document.getElementById("address").value;
            var addresscheck =/^([\w\W ]{1,100})$/ ;

            if(addresscheck.test(address)){
				document.getElementById('addresserror').innerHTML = " ";
				document.getElementById('fa-check-circle5').style.color="#17c117";
				document.getElementById('address').style.borderColor="#17c117";
			}
			else{
				document.getElementById('addresserror').innerHTML = " **please enter valid address**";
				document.getElementById('address').style.borderColor="red";
				return false;
			}


			var pincode=document.getElementById("pincode").value;
            var pincodecheck =/^[0-9]{6}$/ ;

            if(pincodecheck.test(pincode)){
				document.getElementById('pincodeerror').innerHTML = " ";
				document.getElementById('fa-check-circle4').style.color="#17c117";
				document.getElementById('pincode').style.borderColor="#17c117";
			}
			else{
				document.getElementById('pincodeerror').innerHTML = "            **please enter valid pincode**";
				document.getElementById('pincode').style.borderColor="red";
				return false;
			}
			swal("Good job!", "You clicked the button!", "success");
	/*		var date=document.getElementById("date").value;
            var datecheck =/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;

			if(datecheck.test(date)){
				document.getElementById('dateerror').innerHTML = " ";
				
				document.getElementById('date').style.borderColor="#17c117";
			}
			else{
				document.getElementById('dateerror').innerHTML = " {Invalid {date invalid}";
				document.getElementById('date').style.borderColor="red";
				return false;
			}*/
			
}
</script>

</body>
</html>


<?php
if(isset($_POST["sumbit"]))
{
	$name=$_POST["cnm"];
	$email=$_POST["cemail"];
	$phone=$_POST["cphn"];
	$address=$_POST["caddress"];
	$pincode=$_POST["cpincode"];

	echo"<table border='2px'>";
	echo"<tr><td>name</td><td>".$name."</td></tr>";
	echo"<tr><td>email</td><td>".$email."</td></tr>";
	echo"<tr><td>phone</td><td>".$phone."</td></tr>";
	echo"<tr><td>address</td><td>".$address."</td></tr>";
	echo"<tr><td>pincode</td><td>".$pincode."</td></tr>";
	echo"</table>";
	$con=mysqli_connect("localhost","root","","picshort_studio");
	$sql="insert into picshort_client_booking(Name,Email,Phone,Address,pincode)values('".$name."','".$email."','".$phone."','".$address."','".$pincode."')";
	mysqli_query($con,$sql);
	mysqli_close($con);
}
?>
