<?php

require("../vendor/autoload.php");

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../');
$env->load();

use App\database\migration\tableMigration\userAccountTableMigration;

use App\database\migration\tableMigration\resetPasswordTableMigration;

use App\database\migration\tableMigration\testDbTableMigration;

class testingTableMigration{

    public function testUserAccountTableMigration(){

        $user_account_table_migration = new userAccountTableMigration();

        $user_account_table_migration->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_users","mysqli");

        $user_account_table_migration->createUserAccountTable();

    }

    public function testResetPasswordTabkeMigration(){

        $reset_password_table_migration = new resetPasswordTableMigration();

        $reset_password_table_migration->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_password_reset","mysqli");

        $reset_password_table_migration->createResetPasswordTable();

    }

    public function testDbTableMigration(){

        $test_db_table_migration = new testDbTableMigration();

        $test_db_table_migration->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_exam","mysqli");

        $test_db_table_migration->createTestTable();

    }

}

$testing_table_migration = new testingTableMigration();

//$testing_table_migration->testUserAccountTableMigration();

//$testing_table_migration->testResetPasswordTabkeMigration();

$testing_table_migration->testDbTableMigration();

?>