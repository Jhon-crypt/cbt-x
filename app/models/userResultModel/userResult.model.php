<?php

namespace App\models\userResultModel;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class userResultModel{

    public $statement_result;

    public $statement_status;

    public $cached_query_result;

    public $result;

    public function countUserResult(
        $connection,$user_id,$test_id
    ){

        $statement = "SELECT count(*) AS userResult FROM test_".$test_id."_result_of_".$user_id." WHERE question_status='correct'";

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
    
            $key = "count_user_result_query_cache";
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

            $this->result = $statement_row['userResult'];
            
            
        }

    }

    public function updateUserScoreInInTestDb(
        $connection,$test_exams_ref_id,$score,$ref_id
    ){

        $statement = "UPDATE result_of_".$test_exams_ref_id." SET score='$score' 
        WHERE ref_id = '$ref_id'";

        $connection->query($statement);

    }

}

?>