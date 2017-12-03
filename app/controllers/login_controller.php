<?php


if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_post['password'];


	if($username ==="admin"&& $password === "admim"){
		$_SESSION['username']="admin";
		$_SESSION['user']= "admin";
		header('location:')
	}
}