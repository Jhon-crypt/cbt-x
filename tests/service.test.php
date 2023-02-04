<?php

$post_data = file_get_contents("php://input");

$data = json_decode($post_data);


$result = array([
    'id' => 5,
    'question_title' => "kksksk",
    'option_a' => "jdjjdj",
    'option_b' => "jdjjdjdj",
    'option_c' => "jjdjdj",
    'option_d' => "jcdjmdkd",
    'correct_answer' => "jhjsdhdh"

]);

echo json_encode($result);

?>