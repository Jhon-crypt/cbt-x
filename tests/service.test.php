<?php

$post_data = file_get_contents("php://input");

$cr = json_decode($post_data);


$result = array([
    'id' => 1,
    'question_title' => "Title",
    'option_a' => "first option",
    'option_b' => "second option",
    'option_c' => "third option",
    'option_d' => "fourth option",
    'correct_answer' => "this is the correct answer"

]);

echo json_encode($result);

?>