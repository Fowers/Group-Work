<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
		<title>User Records</title>
		
 	</head>
	 <body class="bg-light">

<?php
    require_once ('php/header.php');
?>	


<style>.cart{visibility: hidden; display: none;}</style>
		<h1 style="margin-left:12px;">Shopper records</h1>
		
        
				<table class="container">
				<thead>
				<tr>
					<th>Shopper's ID&nbsp;</th>
					<th>Full Name&nbsp;</th>
					<th>Username&nbsp;</th>
					<th>Email&nbsp;</th>
					<th>Contact Number&nbsp;</th>
					<th>Gender&nbsp;</th>
					
					
					</tr>
				</thead>
			<?php
			include("dbconfig.php");
			error_reporting(0);
			$query = "select*from user";
			$data =mysqli_query($conn,$query);
			$total = mysqli_num_rows($data);
			if($total!=0){
				while($result=mysqli_fetch_assoc($data)){
					echo"
			
			<tbody>
			<tr>
				<td> ".$result['userid']."&nbsp;</td>
				<td> ".$result['fname']."&nbsp;</td>
				<td> ".$result['uname']."&nbsp;</td>
				<td> ".$result['email']."&nbsp;</td>
				<td> ".$result['contactno']."&nbsp;</td>
				<td> ".$result['gender']."&nbsp;</td>
				
				<td> <button type='button' class='btn btn-danger'><a href ='delete.php?userid=$result[userid]' style='text-decoration:none; color:white;'>Delete User</button></td>
				<td> <button type='button' class='btn btn-info'><a href ='deleteseller.php?sellerid=$result[sellerid]' style='text-decoration:none; color:white;'>Edit User</button></td> 

				
			</tr>
			";
			}}else{
				echo "
				
					<tbody>
			<tr>
				<td> No Records Available</td>
				<td></td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				</thead>
				";
			}?>	
		</tbody>
		</table>

		<h1 style="margin-left:12px;">Seller records</h1>
		
        
		<table class="container">
		<thead>
		<tr>
			<th>Seller's ID&nbsp;</th>
			<th>Full Name&nbsp;</th>
			<th>Username&nbsp;</th>
			<th>Email&nbsp;</th>
			<th>Contact Number&nbsp;</th>
			<th>Gender&nbsp;</th>
			<th>Location&nbsp;</th>
			
			
			</tr>
		</thead>
	<?php
	include("dbconfig.php");
	error_reporting(0);
	$query = "select*from seller";
	$data =mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	if($total!=0){
		while($result=mysqli_fetch_assoc($data)){
			echo"
	
	<tbody>
	<tr>
		<td> ".$result['sellerid']."&nbsp;</td>
		<td> ".$result['fname']."&nbsp;</td>
		<td> ".$result['uname']."&nbsp;</td>
		<td> ".$result['email']."&nbsp;</td>
		<td> ".$result['contactno']."&nbsp;</td>
		<td> ".$result['gender']."&nbsp;</td>
		<td> ".$result['location']."&nbsp;</td>
		<td> <button type='button' class='btn btn-danger'><a href ='deleteseller.php?sellerid=$result[sellerid]' style='text-decoration:none; color:white;'>Delete Seller</button></td> 
		<td> <button type='button' class='btn btn-info'><a href ='deleteseller.php?sellerid=$result[sellerid]' style='text-decoration:none; color:white;'>Edit Seller</button></td> 

		
		
	</tr>
	";
	}}else{
		echo "
		
			<tbody>
	<tr>
		<td> No Records Available</td>
		<td></td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
		</thead>
		";
	}?>	
</tbody>
</table>
	
		
		<br><br>
		
		&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="location.href='adduser.php'">Add User</button>&nbsp;&nbsp; <button type="button" class="btn btn-primary" onclick="location.href='addseller.php'">Add Seller</button> &nbsp;&nbsp; <button type="button" class="btn btn-primary" onclick="location.href='addproduct.php'">Add Product</button>&nbsp;&nbsp;<button type="button" class="btn btn-dark" onclick="location.href='#newsletter'">Log out</button> 
		
		</body>
</html>
