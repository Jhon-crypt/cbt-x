<?php

require("./vendor/autoload.php");

use App\views\views;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class cbtX{

    public $index_view;

    public function index(){

        $views_class = new views();

        $views_class->displayIndexPage();

        $this->index_view = $views_class->index_page;

    }

    public function cacheIndex(){

        CacheManager::setDefaultConfig(new ConfigurationOption([
            'path' => 'cache', // or in windows "C:/tmp/"
        ]));
        
        $InstanceCache = CacheManager::getInstance('files');
        
        $key = "index_page";
        $Cached_page = $InstanceCache->getItem($key);
        
        if (!$Cached_page->isHit()) {
        
            $Cached_page->set($this->index_view)->expiresAfter(1);//in seconds, also accepts Datetime
        
            $InstanceCache->save($Cached_page); // Save the cache item just like you do with doctrine and entities
        
            echo $Cached_page->get();
            //echo 'FIRST LOAD // WROTE OBJECT TO CACHE // RELOAD THE PAGE AND SEE // ';
        
        } else {
        
            echo $Cached_page->get();
            //echo 'READ FROM CACHE // ';
        
            $InstanceCache->deleteItem($key);
        }

    }

}

$cbtx = new cbtX();

$cbtx->index();

$cbtx->cacheIndex();

?>