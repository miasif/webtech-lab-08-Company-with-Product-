<?php
$id=$_GET["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM products WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header("Location:showproduct.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
