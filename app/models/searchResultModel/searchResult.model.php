<?php

namespace App\models\searchResultModel;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class searchResultModel{

    public $statement_result;

    public $statement_status;

    public $cached_query_result;

    public function fetchTestExamQuery($connection,$ref_id){

        $statement = "SELECT * FROM testexams WHERE ref_id = '$ref_id'";

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
    
            $key = "search_test_query_cache";
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
                'title' => $statement_row['title'],
                'type' => $statement_row['type'],
                'total_questions' => $statement_row['total_questions'],
                'descriptions' => $statement_row['descriptions'],
                'time_limit' => $statement_row['time_limit'],
                'status' => $statement_row['status'],
                'ref_id' => $statement_row['ref_id'],
                'author' => $statement_row['author'],
                'date_created' => $statement_row['date_created'],
                'time_created' => $statement_row['time_created']
            
            ]);
            
            echo json_encode($result);

        }

    }

}

?>