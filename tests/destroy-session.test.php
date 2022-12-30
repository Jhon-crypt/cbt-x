<?php

session_start();

if(session_destroy()){

    echo "Session destroyed";

}else{

    echo "Session already destroyed";

}

?>