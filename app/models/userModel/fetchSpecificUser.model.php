<?php

namespace App\models\userModel;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class fetchSpecificUserModel{

    public $statement_result;

    public $statement_status;

    public $cached_query_result;

    public $username;

    public function fetchSpecificUserQuery($connection,$ref_id){

        $statement = "SELECT username FROM user_account WHERE ref_id = '$ref_id'";

        $this->statement_result = $connection->query($statement);

        if($this->statement_result->num_rows > 0){

            $this->statement_status = TRUE;

        }else{

            $this->statement_status = FALSE;

        }

    } 

    public function cacheQuery(){

        if($this->statement_status === TRUE){

            CacheManager::setDefaultConfig(new ConfigurationOption([
                'path' => '', // or in windows "C:/tmp/"
            ]));
            
            $InstanceCache = CacheManager::getInstance('files');
    
            $key = "fetch_specific_user_query_cache";
            $cache_query = $InstanceCache->getItem($key);
    
            if (!$cache_query->isHit()) {
                $cache_query->set($this->statement_result)->expiresAfter(1);
                $InstanceCache->save($cache_query);
            
                $this->cached_query_result = $cache_query->get();

                $statement_row = $this->cached_query_result->fetch_assoc();
      
                $this->username = $statement_row['username'];
    
                //echo 'FIRST LOAD // WROTE OBJECT TO CACHE // RELOAD THE PAGE AND SEE // ';
            
            }else{
    
                $this->cached_query_result = $cache_query->get();

                $statement_row = $this->cached_query_result->fetch_assoc();
      
                $this->username = $statement_row['username'];
    
            }

        }

    }

}

?>