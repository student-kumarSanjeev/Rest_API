<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require_once('connection.php');

$id = $_GET['id'];

if($id){
    $sql = "SELECT * FROM student_api WHERE `id` = $id";
}else{
    $sql = "SELECT * FROM student_api";
}
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