<?php

$post_data = file_get_contents("php://input");

$cr = json_decode($post_data);


$result = array([
    'title' => $cr->title
]);

echo json_encode($result);

?>