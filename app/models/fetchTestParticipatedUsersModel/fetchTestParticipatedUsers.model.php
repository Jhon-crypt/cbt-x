<?php

namespace App\models\fetchTestParticipatedUsersModel;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class fetchTestParticipatedModel{

    public $statement_result;

    public $statement_status;

    public $cached_query_result;

    public function fetchParticipatedUsers(
        $connection,$ref_id
    ){

        $statement = "SELECT * FROM result_of_".$ref_id."";

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
    
            $key = "fetch_test_and_exam_query_cache";
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

            $statement_array = array();

            while($statement_row = $this->cached_query_result->fetch_assoc()){

                $statement_array[] = array(

                    'infoFromUser' => $statement_row['info_from_user'],
                    'score' => $statement_row['score']
                );

            }

            echo json_encode($statement_array);

        }

    }

}

?>