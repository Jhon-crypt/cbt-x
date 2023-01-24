<?php

class testExamIdSession{

    public $test_exam_id;

    public $test_exam_id_status;

    public function fetchTestExamId(){

        $post_data = file_get_contents("php://input");

        $data = json_decode($post_data);

        if(isset($data->testExamId) && $data->testExamId !== ""){

            $this->test_exam_id = $data->testExamId;

            $this->test_exam_id_status = TRUE;

        }

    }

    public function createTestExamIdSession(){

        if($this->test_exam_id_status === TRUE){

            session_start();

            $_SESSION['testExamId'] = $this->test_exam_id;

        }

    }

}

$test_exam_id_session = new testExamIdSession();

$test_exam_id_session->fetchTestExamId();

$test_exam_id_session->createTestExamIdSession();

?>