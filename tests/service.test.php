<?php

$post_data = file_get_contents("php://input");

$data = json_decode($post_data);


$result = array([
    'search' => $data->searchValue

]);

echo json_encode($result);

?>