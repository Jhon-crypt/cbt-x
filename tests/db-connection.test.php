<?php

require("../vendor/autoload.php");

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../');
$env->load();

use App\database\connection\userAccountDbConnection;

class testingDatabaseConnection{

    public function testingUserAccountDbConnection(){

        $user_account_db_connection = new userAccountDbConnection();

        $user_account_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_users","mysqli");

    }

}

$testing_database_connection = new testingDatabaseConnection();

//$testing_database_connection->testingUserAccountDbConnection();

?>