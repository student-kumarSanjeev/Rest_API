<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['sid'];

require('connection.php');

$sql = "SELECT * FROM student_api WHERE id = $student_id ";

$result = mysqli_query($conn, $sql) or die("SQL query faild");
if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array(
        'message' => 'No Record Found.',
        'status' => false
    ));
}
?>