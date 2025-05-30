<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With ');

$data = json_decode(file_get_contents("php://input"),true);

$id = $data['sid'];
$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];

require('connection.php');

$sql = "UPDATE `student_api` SET `name` = '$name', `age` = '$age', `city` = '$city' WHERE `student_api`.`id` = $id";

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