<?php
include 'connect.php';

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_post['password'];


	if($username ==="admin"&& $password === "admim"){
		$_SESSION['username']="admin";
		$_SESSION['user']= "admin";
		header('location:public/')
	}else{
	
	 $sql = "select * from users where user_name='$username' and user_password='$password'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['user_name'];
            $_SESSION['user'] = $row['type'];
            $_SESSION['id'] = $row['user_id'];
            header('location:public/');

        }

	}
}