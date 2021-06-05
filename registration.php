<?php
session_start();
include("config1.php");
    $name=$last=$person_gender=$bDate=$mobNo=$eId=$uId=$password=$confirmpassword='';
    if(isset($_POST['submit']))
    {
        $name= $_POST['fname'];
        $last= $_POST['lname'];
        $person_gender= $_POST['gender'];
        $bDate=$_POST['birthdate'];
        $mobNo=$_POST['mobileno'];
        $eId=$_POST['email'];
        $uId=$_POST['username'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];

        $result=mysqli_query($conn,"INSERT into registration_info (name,last,person_gender,bDate,mobNo,eId,uId,password,confirmpassword)values('$name','$last','$person_gender','$bDate','$mobNo','$eId','$uId','$password','$confirmpassword')");
		
			if($result)
			{
				echo "sucess";
				header('Location:./login.php');
			}
			else{
				echo "failed";
			} 
        }
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>registration | movie recommandation</title>
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script>
            function GEEKFORGEEKS() {
                var fname = 
                    document.forms["RegForm"]["fname"];

                 var lname = 
                    document.forms["RegForm"]["lname"];

                     var gender = 
                    document.forms["RegForm"]["gender"];
                      
                    var birthdate = 
                    document.forms["RegForm"]["birthdate"];

                    var mobNo = 
                    document.forms["RegForm"]["mobileno"];

                      
                var email = 
                    document.forms["RegForm"]["email"];

                    var username= 
                    document.forms["RegForm"]["username"];

                      var password= 
                    document.forms["RegForm"]["password"];

                      var confirmpassword= 
                       document.forms["RegForm"]["confirmpassword"];
                
  
                if (fname.value == "") {
                    window.alert("Please enter your first name...");
                    fname.focus();
                    return false;
                }
                 if (lname.value == "") {
                    window.alert("Please enter your last name...");
                    lname.focus();
                    return false;
                }
                /*if (gender.value == "") {
                    window.alert("Please enter your gender.");
                    gender.focus();
                    return false;
                }*/
                if(!(gender[0].checked || gender[1].checked))
                {
                	 window.alert("Please select the gender...");
                	 
                	 return false;
                }
                 if (birthdate.value == "") {
                    window.alert("Please enter your birthdate...");
                    birthdate.focus();
                    return false;
                }
                 if (mobNo.value == "") {
                    window.alert("Please enter your mobile number...");
                    mobNo.focus();
                    return false;
                }
                 if (email.value == "") {
                    window.alert("Please enter your email id...");
                    email.focus();
                    return false;
                }
                 if (username.value == "") {
                    window.alert("Please enter your username...");
                    username.focus();
                    return false;
                }
                 if (password.value == "") {
                    window.alert("please enter your password...");
                    password.focus();
                    return false;
                }
                if (confirmpassword.value == "") {
                    window.alert("please enter your confirm passowrd...");
                    confirmpassword.focus();
                    return false;
                }
				if(password.value != confirmpassword.value){
					window.alert("your password and confirm passowrd should be same...");
					return false;
				}
				return true;
            }
        </script>
	<style>
		body{
			background-image: url("images/loginback.jpg");
			background-size: cover;
	      background-repeat: no-repeat;
	       height: 100%;

		}
		.button {
			width: 20vh;
			height: 38px;
			background-color: rgb(233, 85, 183);
			border: 1px solid gray;
			border-radius: 8px;
			font-size: 20px;
			font-weight: bold;
			}
			.button:hover {
			background-color: rgb(231, 68, 177);
			}
		
	</style>

</head>
<body>
 <h1 style="text-align: center;font-family: 'Averia Serif Libre', cursive;font-size: 40px;color:white;">Registration Form</h1>		
	<div class="log" >
	<form name="RegForm" action="<?php echo $_SERVER['PHP_SELF']; ?>"  onsubmit="return GEEKFORGEEKS()" method="post" >
		
	<div class="myInfo">
			<label>First Name:</label>
			<input type="text" name="fname" id="fname" autocomplete="off"><br>
			<label>Last Name:</label>
			<input type="text" name="lname" id="lname"autocomplete="off"><br>
			
			<div class="genderAlign">
				<label>Gender:</label>
				<input type="radio" name="gender" id="gender" value="Male">
				<label>Male</label>
				<input type="radio" name="gender" id="gender" value="Female">
				<label>Female</label><br>
			</div>
		     <label for="birthdate">Birth-date:</label>
			<input type="date" name="birthdate" id="birthdate"><br>
			<label>Mobile Number:</label>
			<input type="number" name="mobileno" id="mobileno"autocomplete="off"><br>
			<label>Email ID:</label>
			<input type="email" name="email" id="email"autocomplete="off"><br>
			<label>Username:</label>
			<input type="text" name="username" id="username" autocomplete="off"><span id="user" style="text-colour=red"></span><br>
			<label>Password:</label>
			<input type="password" name="password" id="password"autocomplete="off"><br>
			<label>Confirm Password:</label>
			<input type="password" name="confirmpassword" id="confirmpassword"autocomplete="off"><br>
		</div>

		<div class="buttonRoot" style="text-align: center;padding-top : 20px;">
			<button class="button" 
			type="submit" name="submit">Submit</button>
			<!--<button class="buttonClear">Clear</button> -->
	    </div>	
	</form>
	
</body>
</html>
