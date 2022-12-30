<?php

class sessionGuard{

    public function checkIfSessionIsSet(){

        session_start();

        session_regenerate_id();

        if(isset($_SESSION['login_session'])){

            $result = array([
                'sessionSet' => TRUE,
                'sessionNotSet' => FALSE
            ]);
                    
            echo json_encode($result);

        }else{

            $result = array([
                'sessionSet' => FALSE,
                'sessionNotSet' => TRUE
            ]);
                    
            echo json_encode($result);

        }

    }

}

$session_guard = new sessionGuard();

$session_guard->checkIfSessionIsSet();


?>