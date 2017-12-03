<?php
include 'connect.php';

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_post['password'];


	if($username ==="admin"&& $password === "admim"){
		$_SESSION['username']="admin";
		$_SESSION['user']= "admin";
		header('location:')
	}else{
	
	$sql = "select * from users where user_name='$username' and user_password='$password'";
	 $result = mysqli_query($con, $sql);

	}
}