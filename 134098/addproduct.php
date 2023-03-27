<html lang="en">
    <body>
<form action="addproduct.php" method="post">
	<div class="sucontainer">
	<br>
		<div style="color: black;">Product Name</div><br>
		<div class="wrap-input100 validate-input m-b-10" data-validate = "Product name is required">
						<input class="input100" type="text" name="product_name" placeholder="Product name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					
					<br>
					<div style="color: black;">Product Price</div><br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Product Price is required">
						<input class="input100" type="number" name="product_price" placeholder="Product Price" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
                    
					
		<div class="container-login100-form-btn p-t-10">
		<button class="login100-form-btn" type="submit" value ="Submit" name="submit" />
		Sign up
			</button></div>
			</form>
            <?php

if (isset($_POST["submit"])){

	$servername = "localhost";
	$username = "root"; 
	$password = "";
	$dbname = "productdb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Connection failed:" . $conn->connect_error);
	}
	

	
$sql = "INSERT INTO producttb(product_name, product_price)
		 VALUES('".$_POST["product_name"]."', '".$_POST["product_price"]."'))";
		 
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