<?php

require("./vendor/autoload.php");

use App\views\adminViews;

use Phpfastcache\CacheManager;

use Phpfastcache\Config\ConfigurationOption;

class godmode{

    public $godmod_view;

    public function godmodeView(){

        $admin_page = new adminViews();

        $admin_page->displayAdminPage();

        $this->godmode_view = $admin_page->admin_page;

    }

    public function cachegodmodeView(){

        CacheManager::setDefaultConfig(new ConfigurationOption([
            'path' => '', // or in windows "C:/tmp/"
        ]));
        
        $InstanceCache = CacheManager::getInstance('files');
        
        $key = "admnin_page";
        $Cached_page = $InstanceCache->getItem($key);
        
        if (!$Cached_page->isHit()) {
        
            $Cached_page->set($this->godmode_view)->expiresAfter(1);//in seconds, also accepts Datetime
        
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

$godmode = new godmode();

$godmode->godmodeView();

$godmode->cachegodmodeView();

?>