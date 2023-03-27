<?php

if($_POST){
	$host = "localhost";
	$user = "root"; 
	$pass = "";
	$db = "shop";
	
	
		$uname=$_POST['uname'];
		$password=$_POST['password'];
		$conn=mysqli_connect($host,$user,$pass,$db);
		
		$query="SELECT * FROM seller where  uname='$uname' and password=MD5('$password')";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)==1){
			session_start();
			$_SESSION['shop']='true';
			header('location:index.php');
		}else{
			echo
			"<script type='text/javascript'>
				alert('Wrong Username/Password');
				</script>";
		
			}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>	


	
<div class="container-login100">
<div class="container-login100" style="background-image: url('images/img1.jpg'); border-radius: 12px;">	
  <div id="formContent">
    <form method="post">
	<div class="sucontainer"> 
	<div class="form-group">
	<span class="login100-form-title p-t-20 p-b-45">
						Seller Log In
					</span>

	<br><br>
		<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="uname" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					
					<br>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>
  <div class="container-login100-form-btn p-t-10">
		<button class="login100-form-btn">
							Login
						</button>
	</div><br><br><br><br><br><br>
	<div class="text-center w-full">
	<p style="color: white;" href="" class="linky">
							No Account? <a class="txt1" href="seller-signup.php" style="color: red;">click here</a>
												
						</p>
						
					
						
						
    </div><br><br>
</form>
</div></div></div></div></div></div>
</body>

</html>
