<?php 
$name = $_REQUEST['q'];
include 'connect.php';

$user_id = $_SESSION['id'];

$sqlmangerid = "select managerId from managers where user_id=$user_id";
$result = mysqli_query($con,$sqlmanagerid);
$row = mysqli_fetch_assoc($result);
$sqlmanagerName ="Select user_name from users where user_id=".$row['mangerId'];
$result = mysqli_query($con,$sqlmanagerName);
$rowManger = mysqli_fetch_assoc($result);
$sql= "select clientNname from clients where clientName='$name'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    echo "Name Already Exists ! Plaese contact ".$rowManager['user_name']." For further assistance";
}else{

}
?>




