<?php

namespace App\models\fetchQuestionsModel;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class fetchQuestionFourModel{

    public $statement_result;

    public $statement_status;

    public $cached_query_status;

    public $cached_query_result;

    public function fetchQuestionsFromDb($connection,$ref_id){

        $statement = "SELECT * FROM questions_of_".$ref_id." WHERE id=4";

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
    
            $key = "fetch_practice_question_four_query_cache";
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
                'id' => $statement_row['id'],
                'question_title' => $statement_row['question_title'],
                'option_a' => $statement_row['option_a'],
                'option_b' => $statement_row['option_b'],
                'option_c' => $statement_row['option_c'],
                'option_d' => $statement_row['option_d'],
                'correct_answer' => base64_encode($statement_row['correct_answer'])

            ]);

            echo json_encode($result);


        }

    }

}

?>