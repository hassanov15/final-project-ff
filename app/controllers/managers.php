<?php
include 'connect.php';
$q =$_REQUEST["q"];
$options ="";
$sql = "select user_name_id from users where type='manager'";
$result= myqli_query($con,$sql);