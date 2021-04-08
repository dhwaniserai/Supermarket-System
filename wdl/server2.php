<?php
session_start();

// initializing variables

$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'admin');


if (isset($_POST['login_user'])) {
	
  
  $result = mysqli_query($db,"SELECT * FROM Admin WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid Username or Password!";
	} else {
		header('location: admin.php');
	}
  
}