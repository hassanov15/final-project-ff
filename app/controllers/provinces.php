<?php
include ' connect.php';
$options = "";
$sql=" select provinceId,provinceName from province";
$result = mysqli_query($con,$sql);
while($row = mysqli_query_assoc($result)){
	$name = $row['provinceName'];
	$id = $row['provinceId'];
	$options = $ptions."<option value='$id'>$name</option>";

}
echo $options;
?>