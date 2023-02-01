<?php

$post_data = file_get_contents("php://input");

$data = json_decode($post_data);


$result = array([
    'answer1' => "testtttt"
]);

echo json_encode($result);

?>