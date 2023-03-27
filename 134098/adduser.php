<html lang="en">
	<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
	<link rel="stylesheet" href="css/main.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
    <body style="margin-left: 14px;" class="bg-light">
	

<?php
    require_once ('php/header.php');
?>	


<style>.cart{visibility: hidden; display: none;}</style>
<form action="adduser.php" method="post">
	<div class="sucontainer">
	<br>
		<div style="color: black;">Name</div><br>
		<div class="wrap-input100 validate-input m-b-10" data-validate = "Full name is required">
						<input class="input100" type="text" name="fname" placeholder="Full name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					<div style="color: black;">Username</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Full name is required">
					<input class="input100" type="text" name="uname" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					<div style="color: black;">Email</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					<div style="color: black;">Contact Details</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Contact Number is required">
						<input class="input100" type="number" name="contactno" placeholder="Contact Number" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Contact Number is required">
					<div style="color: black;">Gender</div><br>
                    <b><input type="radio" name="gender" value="Female">&nbsp;<span style="color: black;">Female</span></b>
					<b><input type="radio" name="gender" value="Male" >&nbsp;<span style="color: black;">Male</span></b><br><br>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Date of Birth is required">
						<input class="input100" type="date" name="dob" placeholder="Date of Birth">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
													</span>
					</div>
					<br>
                   <div style="color: black;">Password</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					<div style="color: black;">Confirm Password</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="rpassword" placeholder="Confirm Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
					
		<div class="container-login100-form-btn p-t-10">
		<button class="btn btn-primary" type="submit" value ="Submit" name="submit" />
		Sign up
			</button>&nbsp;&nbsp;<button type="button" class="btn btn-secondary" onclick="location.href='adminhome.php'" >Go Home</button></div>
			<br><br><br><br>	
		</form>
            
            <?php

if (isset($_POST["submit"])){
	include 'dbconfig.php';
	
$sql = "INSERT INTO user(fname, uname, email,  contactno, gender, dob, password, rpassword)
		 VALUES('".$_POST["fname"]."', '".$_POST["uname"]."', '".$_POST["email"]."', '".$_POST["contactno"]."', '".$_POST["gender"]."', '".$_POST["dob"]."', MD5('".$_POST["password"]."'), MD5('".$_POST["rpassword"]."'))";
		 
	if($conn->query($sql) === TRUE){
		echo
			"<script type='text/javascript'>
				alert('User added succesfully.Go to Admin Homepage.');
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