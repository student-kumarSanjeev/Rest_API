<?php
// session_start();
// // session_destroy();

// // print_r($_SERVER['HTTP_USER_AGENT']);
// // $_SESSION['user_device'] = "hewr";
// setcookie("ghj", $_SERVER['HTTP_USER_AGENT']);
// echo "<pre>";
// print_r($_SESSION);
// die;
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require_once('connection.php');

$limit = 3;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM student_api LIMIT $offset, $limit";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode([
        "data" => $output,
        "status" => true
    ]);
} else {
    echo json_encode([
        "data" => [],
        'message' => 'No Record Found.',
        'status' => false
    ]);
}

?>
