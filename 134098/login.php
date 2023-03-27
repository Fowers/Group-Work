<?php

if($_POST){
	$host = "localhost";
	$user = "root"; 
	$pass = "";
	$db = "shop";
	
	
		$uname=$_POST['uname'];
		$password=$_POST['password'];
		$conn=mysqli_connect($host,$user,$pass,$db);
		
		$query="SELECT * FROM user where  uname='$uname' and password=MD5('$password')";
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

<head>
    <meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
    <title>Login Page</title>
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
<div class="container-login100" style="background-image: url('images/img1.jpg'); border-radius: 12px;">	
<center><div class="wrapper fadeInDown">  
<div id="formContent">
<span class="login100-form-title p-t-20 p-b-45">
						Log In Page
					</span>
    <form method="post">
	<div class="sucontainer"> 
		<br>



	<br><br>
	<div style="color: white;">Username</div><br>
		<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required" style="width: 1000;" >
						<input class="input100" type="text" name="uname" placeholder="Username" required >
						<span class="focus-input100" style="width: 500;"></span>
						<span class="symbol-input100" >
							
						</span>
					</div>
					
					<br>
					<div style="color: white;">Password</div><br>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required" >
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
							No Account? <a class="txt1" href="signup.php" style="color: red;">click here</a>
												
						</p>
						
					
						
						
    </div><br><br>
</form> </div></center>
</div></div></div></div></div></div>
</body>

</html>
