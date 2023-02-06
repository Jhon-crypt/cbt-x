<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\testExamsDbConnection;

use App\models\testAndExamModel\testAndExamModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class searchTest{

    public $session_status;

    public $user_session;

    public $test_exams_connect;

    public function fetchUserSession(){

        if(isset($_SESSION['login_session'])){

            $this->session_status = TRUE;

            $this->user_session = $_SESSION['login_session'];

        }else{

            $this->session_status = FALSE;

        }

    }


}

?>