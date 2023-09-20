<?php
$servername = "Server: 127.0.0.1";
$database = "db_login";
$username = "root";
$password = "";
// database connection code
if(isset($_POST['txtUserName']))

// Connecting using mysqli_connect ('localhost', 'database_user', 'database_password','database');
$conn = mysqli_connect('Server: 127.0.0.1', 'root', '', 'db_login');

// get the post records

$txtUserName = $_POST['txtUserName'];
$txtEmail = $_POST['txtUserEmail'];
$txtPassword = $_POST['txtPassword'];


// database insert MySQL 
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldUserName`, `fldEmail`, `fldPassword`) VALUES ('0', '$txtUserName', '$txtEmail', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Log in success";
}

else
{
	echo "Email/Password does not exist. Click on Register";
	
}
mysqli_close($conn);
?>