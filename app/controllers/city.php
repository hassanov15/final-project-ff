<?php
include 'connect.php';
$q = $_REQUEST["q"];
$options = "";
$sql= "select citiesNname from cities where provinceId=$q";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
    $options = $options."<option value='".$row['citiesName']."'>".$row['citiesName']."</option>";
}

echo $options;
?>