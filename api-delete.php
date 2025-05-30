<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With ');

$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['sid'];

require('connection.php');

$sql = "DELETE FROM student_api WHERE id = $student_id";

if(mysqli_query($conn, $sql)){
    echo json_encode(array(
        'message' => 'Record Deleted Successfully.',
        'status' => true
    ));
    header("Location: ./read.html");
}else{
    echo json_encode(array(
        'message' => 'Record Not Deleted.',
        'status' => false
    ));
}

?>