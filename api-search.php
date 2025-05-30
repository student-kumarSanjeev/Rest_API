<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// $data = json_decode(file_get_contents("php://input"),true);
// $search = $data['search'];

// For Using GET Method
// $search = isset($_GET['name'])? $_GET['name'] : die();

// require('connection.php');

// $sql = "SELECT * FROM student_api WHERE `name` LIKE '%{$search}%'";

// $result = mysqli_query($conn, $sql) or die("SQL query faild");
// if(mysqli_num_rows($result)>0){
//     $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
//     echo json_encode($output);
// }else{
//     echo json_encode(array(
//         'message' => 'No Search Found.',
//         'status' => false
//     ));
// }


$search = isset($_GET['name']) ? $_GET['name'] : '';

if (empty($search)) {
    echo json_encode([
        'message' => 'Search term is required.',
        'status' => false
    ]);
    exit;
}

require('connection.php');

$sql = "SELECT * FROM student_api";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo json_encode([
        'message' => 'Database query failed.',
        'status' => false
    ]);
    exit;
}

$matched = [];

while ($row = mysqli_fetch_assoc($result)) {
    similar_text(strtolower($search), strtolower($row['name']), $percent);
    if ($percent > 60) { 
        $matched[] = $row;
    }
}

if (!empty($matched)) {
    echo json_encode($matched);
} else {
    echo json_encode([
        'message' => 'No Search Found.',
        'status' => false
    ]);
}

?>