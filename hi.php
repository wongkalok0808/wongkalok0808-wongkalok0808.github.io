<?php
//	$dbhost = 'localhost';
//	$dbuser = 'id19687523_admin123';
//
//	$dbpass = "3)b1iB_\9j3I_1cz";
//	$conn = mysql_connect($dbhost, $dbuser,  $dbpass) or die ('Error connecting to mysql');
//	$dbname = 'id19687523_main';
//	mysql_select_db($dbname);
//	mysql_close($conn);

// =====================================================================

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('Localhost', 'id19687523_admin123', ')gYHk%@Z8a\UJcE?', 'id19687523_main');

if (!$con)
{
    die("连接错误: " . mysqli_connect_error());
}

// get the post records
$txtName = $_POST['txtName'];

// database insert SQL code
$sql = "INSERT INTO `user` (`user_name`) VALUES ('$txtName')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>