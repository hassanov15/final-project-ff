<? 
$phone = $_Request['q'];
$phoneLength =strlen($phone);
if($phoneLength != 10){
	echo"phone number should be of 10 digits";
	
}