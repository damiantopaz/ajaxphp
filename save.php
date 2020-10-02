<?php
include 'database.php';
$db = new Database();
$db->creattable();
sleep(1);
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];

$createUser = $db->registerUser($name,$email,$phone,$city);
if ($createUser){ echo json_encode(array("statusCode"=>200, "status"=> true));
}else{echo json_encode(array("statusCode"=>400));}




?>