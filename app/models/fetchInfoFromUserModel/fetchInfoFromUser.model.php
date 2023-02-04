<?php

namespace App\models\fetchInfoFromUserModel;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class fetchInfoFromUserModel{

    public $statement_result;

    public $statement_status;

    public $cached_query_result;

    public function fetchInfoFromUserInDb($connection,$ref_id,$test_id){

        $statement = "SELECT infoFromUser FROM testExams_of_user_".$ref_id." 
        WHERE ref_id = '$test_id'";

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
    
            $key = "fetch_info_from_user_query_cache";
            $cache_query = $InstanceCache->getItem($key);
    
            if (!$cache_query->isHit()) {
                $cache_query->set($this->statement_result)->expiresAfter(1);
                $InstanceCache->save($cache_query);
            
                $this->cached_query_result = $cache_query->get();
      
                //$this->ref_id = $cached_query_result['ref_id'];
    
                //echo 'FIRST LOAD // WROTE OBJECT TO CACHE // RELOAD THE PAGE AND SEE // ';
            
            }else{
    
                $this->cached_query_result = $cache_query->get();
      
                //$this->ref_id = $cached_user_query_result['ref_id'];
     
            }

        }

    }

    public function queryResult(){

        if($this->statement_status === TRUE){

            $statement_row = $this->cached_query_result->fetch_assoc();

            $result = array([
                'infoFromUser' => $statement_row['infoFromUser']
            ]);

            echo json_encode($result);

        }

    }

}

?>