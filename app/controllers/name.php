<?php 
$name = $_REQUEST['q'];
include 'connect.php';

$user_id = $_SESSION['id'];

$sqlmangerid = "select manager_id from managers where user_id=$user_id";
$result = mysqli_query($con,$sqlmanagerid);
$row = mysqli_fetch_assoc($result);


