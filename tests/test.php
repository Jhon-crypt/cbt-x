<?php
/*
$post_data = file_get_contents("php://input");

$data = json_decode($post_data);

if(isset($data->testExamId) && $data->testExamId !== ""){

    session_start();

    $_SESSION['testExamId'] = $data->testExamId;

}
*/

session_start();

echo $_SESSION['testExamId'];

?>