<?php
	session_start();
	$username=$_SESSION["uname"];
	
	
	
	
	?>
<!DOCTYPE HTML>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIF MIA</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body> 

   <div class="header_area">
		<div class="header_left">
			<h1>XCompany</h1>
		</div>
		
	<div class="header">	
		<div class="header_index">
			<h3><a href="index.php">Home</a></h3>
		</div>
		<div class="header_login">
			<h3>Logged in as <a style="color:blue;" href="profile.php"><?php echo  $username; ?></a></h3>
		</div>
		<div class="header_registration">
			<h3><a href="login.php">Logout</a></h3>
		</div>
	</div>	
   </div>
	
	
		
	<div class="content_area">
	   <div class="menu_left">
		 <h3>Account</h3>
		 
			<ul>
				<li><a href="dashboard.php">Dasboard</a></li>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="changeprofile.php">Change Profile</a></li>
				<li><a href="changepassword.php">Change password</a></li>
				<li><a href="showproduct.php">Products</a></li>
				<li><a href="addproduct.php">Add Product</a></li>
				<li><a href="login.php">logout</a></li>
			</ul>
		 </div>
		  <div class="gap">
		  <p> </p>
		 </div>
	
		<div class="menu_right">
			<h3>products</h3>
			
		<form method="post">
		
        <table>
			<tr>
				<td><b>Product Name :</b></td>
				<td><input type="text" name="pname"/></td>
				
			</tr>
			<tr>
				<td><b>Description :</b></td>
				<td><input type="text" name="description"/></td>
				
			</tr>
			
			<tr>
				<td><b>Quantity :</b></td>
				<td><input type="number" name="quantity"/></td>
				
			</tr>
			
			
			
			
			
			
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>
		
			
		
	</form>
			
		</div>
	</div>
	<div class="footer_area">
	
	</div>
    <?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if($_POST["pname"]!="" && $_POST["description"]!="" && $_POST["quantity"]!="")
			{
				
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "userdb";

					
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "INSERT INTO products (name, description, quantity)
					VALUES ('".$_POST["pname"]."', '".$_POST["description"]."', '".$_POST["quantity"]."')";

					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
			}
				
		}
		
	?>
</body>
</html>
