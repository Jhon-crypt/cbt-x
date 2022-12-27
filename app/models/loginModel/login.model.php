<?php

namespace App\models\loginModel;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class loginModel{

    public $login_statement_row;

    public $login_statement_status;

    public $ref_id;

    public function loginThroughDb($connection,$email,$password){

        $statement = "SELECT * FROM user_account WHERE email = '$email' && 
        password='$password'";

        $statement_result = $connection->query($statement);

        if($statement_result->num_rows > 0){

            $this->login_statement_row = $statement_result->fetch_assoc();

            $this->login_statement_status = TRUE;

        }else{

            $this->login_statement_error = FALSE;

        }

    }

    public function cacheLoginQuery(){

        if($this->login_statement_status === TRUE){

            CacheManager::setDefaultConfig(new ConfigurationOption([
                'path' => '', // or in windows "C:/tmp/"
            ]));
            
            $InstanceCache = CacheManager::getInstance('files');
    
            $key = "login_query_cache";
            $cache_query = $InstanceCache->getItem($key);
    
            if (!$cache_query->isHit()) {
                $cache_query->set($this->login_statement_row)->expiresAfter(1);
                $InstanceCache->save($cache_query);
            
                $cached_user_query_result = $cache_query->get();
      
                $this->ref_id = $cached_user_query_result['ref_id'];
    
                //echo 'FIRST LOAD // WROTE OBJECT TO CACHE // RELOAD THE PAGE AND SEE // ';
            
            }else{
    
                $cached_user_query_result = $cache_query->get();
      
                $this->ref_id = $cached_user_query_result['ref_id'];
     
            }

        }else{



        }

    }

    public function updateUserStatus($connection){

        /*
        "UPDATE students SET login_status='Online' 
        WHERE encrypted_id = '$this->encrypted_id'";
        */

        $statement = "UPDATE user_account SET status='online' 
        WHERE ref_id = '$this->ref_id'";

        if($connection->query($statement) === TRUE){

            session_start();

            $_SESSION['login_session'] = $this->ref_id;


        }else{


        }

    }

}

?>