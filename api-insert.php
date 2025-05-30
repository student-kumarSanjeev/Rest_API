<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With ');

$data = $_POST;
$name = $data['name'];
$age = $data['age'];
$city = $data['city'];

require('connection.php');

$sql = "INSERT INTO `student_api` (`name`, `age`, `city`) VALUES ('$name', '$age', '$city')";

if(mysqli_query($conn, $sql)){
    echo json_encode(array(
        'message' => 'Record Inserted Successfully.',
        'status' => true
    ));
}else{
    echo json_encode(array(
        'message' => 'Record Not Inserted.',
        'status' => false
    ));
}
?>