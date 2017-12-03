<?php
include 'connect.php';
$q =$_REQUEST["q"];
$options ="";
$sql = "select user_name_id from users where type='manager'";
$result= myqli_query($con,$sql);
if($result == mysqli_fetch_assoc($row)){
	$options= $row['user_id'].$row['user_name'];


}
echo $options 
?>