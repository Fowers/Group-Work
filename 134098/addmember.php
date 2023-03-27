<?php
	error_reporting( ~E_NOTICE );
	require_once 'dbcon.php';

	if(isset($_POST['btnsave']))
	{
		$username = $_POST['uname'];
		$email = $_POST['email'];
		if(empty($username)){
			$errMSG = "Please Enter Username.";
		}
		else if(empty($email)){
			$errMSG = "Please Enter Your email.";
		}
		
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO user(uname,userid,email) VALUES(:uname, :userid, :email)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':udes',$email);
			$stmt->bindParam(':email',$email);	
			if($stmt->execute())
			{
				$successMSG = "Successfully Added A New Member.";
				header("refresh:1;adminhome.php");
			}
			else
			{
				$errMSG = "Error While Creating.";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP/MySQL Add, Edit, Delete, With User Profile.</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://www.sourcecodester.com">Sourcecodester</a>
			<ul class="nav navbar-nav">
            <li class="active"><a href="adminhome.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact Us.</a></li>
            <li><a href="adminlogin.php">Log-Out</a></li>
			</ul>
        </div>
    </div>
</nav>
<div class="container">
	<div>
	<h1 class="h2">&nbsp; Add New User<a class="btn btn-success" href="adminhome.php" style="margin-left: 850px"><span class="glyphicon glyphicon-home"></span>&nbsp; Back</a></h1><hr>
    </div>
	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin: 0 300px 0 300px;border: solid 1px;border-radius:4px">
	<table class="table table-responsive">
	
    <tr>
    	<td><label class="control-label">Full Name</label></td>
        <td><input class="form-control" type="text" name="fname" placeholder="Enter Username" value="<?php echo $username; ?>" /></td>
    </tr>
	<tr>
    	<td><label class="control-label">Username</label></td>
        <td><input class="form-control" type="text" name="uname" placeholder="Enter Username" value="<?php echo $username; ?>" /></td>
    </tr>
    <tr>
    	<td><label class="control-label">Email</label></td>
        <td><input class="form-control" type="email" name="email" placeholder="Your Description" value="<?php echo $email; ?>" /></td>
    </tr>
    <tr>
    	<td><label class="control-label">Contact No</label></td>
        <td><input class="input-group" type="text" name="contactno"/></td>
    </tr>
	<tr>
    	<td><label class="control-label">Gender</label></td>
        <td><input class="form-control" type="text" name="uname" placeholder="Enter Gender" value="<?php echo $gender; ?>" /></td>
    </tr>
	<tr>
    	<td><label class="control-label">Dob</label></td>
        <td><input class="form-control" type="text" name="dob" placeholder="Enter DOB" value="<?php echo $dob; ?>" /></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><button type="submit" name="btnsave" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; Save</button>
        </td>
    </tr>
    </table>
</form>
</div>
</body>
</html>