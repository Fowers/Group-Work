<html lang="en">
<head>
    <meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
    <title>Sign Up</title>
	<link rel="stylesheet" href="css/main.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
	</head>
<body>

<div class="container-login100">
<div class="container-login100" style="background-image: url('images/img1.jpg'); border-radius: 12px; ">	
<center><div class="wrapper fadeInDown">
 <div id="formContent">
    <span class="login100-form-title p-t-20 p-b-45">
						Sign Up
					</span>

    <form action="signup.php" method="post">
	<div class="sucontainer">
	<br>
		<div style="color: white;">Name</div><br>
		<div class="wrap-input100 validate-input m-b-10" data-validate = "Full name is required" style="width: 1000;" >
						<input class="input100" type="text" name="fname" placeholder="Full name" required >
						<span class="focus-input100" style="width: 500;"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					<div style="color: white;">Username</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Full name is required">
					<input class="input100" type="text" name="uname" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					<div style="color: white;">Email</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					<div style="color: white;">Contact Details</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Contact Number is required">
						<input class="input100" type="number" name="contactno" placeholder="Contact Number" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Contact Number is required">
					<div style="color: white;">Gender</div><br>
                    <b><input type="radio" name="gender" value="Female">&nbsp;<span style="color: white;">Female</span></b>
					<b><input type="radio" name="gender" value="Male" >&nbsp;<span style="color: white;">Male</span></b><br><br>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Date of Birth is required">
						<input class="input100" type="date" name="dob" placeholder="Date of Birth">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
													</span>
					</div>
					<br>
                   <div style="color: white;">Password</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					<div style="color: white;">Confirm Password</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="rpassword" placeholder="Confirm Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					
		<div class="container-login100-form-btn p-t-10">
		<button class="login100-form-btn" type="submit" value ="Submit" name="submit" />
		Sign up
			</button></div>
			</form>
			
			<br><br><br>
			<div class="text-center w-full">
						<p style="color: white;" href="" class="linky">
							Have an account? <a class="txt1" href="login.php" style="color: red;">click here</a>
												
						</p>
						
						
						
						
  </div></div><br><br>  </div></center></div> 
  </div>
</div>
<br><br>

</form>
<?php

if (isset($_POST["submit"])){
	include 'dbconfig.php';
	
$sql = "INSERT INTO user(fname, uname, email,  contactno, gender, dob, password, rpassword)
		 VALUES('".$_POST["fname"]."', '".$_POST["uname"]."', '".$_POST["email"]."', '".$_POST["contactno"]."', '".$_POST["gender"]."', '".$_POST["dob"]."', MD5('".$_POST["password"]."'), MD5('".$_POST["rpassword"]."'))";
		 
	if($conn->query($sql) === TRUE){
		echo
			"<script type='text/javascript'>
				alert('Record added succesfully. Proceed to Log-In Page.');
				</script>";
		}
		else{
	
			"<script type='text/javascript'>
				alert('Error: " . $sql . "<br>" . $conn->error."');
				</script>";
		}
		$conn->close();
	}

?>

</body>
</html>