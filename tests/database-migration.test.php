<?php

require("../vendor/autoload.php");

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../');
$env->load();

use App\database\migration\dbMigration\userAccountDbMigration;

use App\database\migration\dbMigration\passwordResetDbMigration;

use App\database\migration\dbMigration\testExamDbMigration;

use App\database\migration\dbMigration\resultDbMigration;

use App\database\migration\dbMigration\infoDbMigration;

class testingDatabaseMigration{

    public function testUserAccountDbMigration(){

        $user_account_db_migration = new userAccountDbMigration();

        $user_account_db_migration->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"mysqli");

        $user_account_db_migration->createUserAccountDatabase();

    }

    public function passwordResetDatabaseMigration(){

        $password_reset_db_migration = new passwordResetDbMigration();

        $password_reset_db_migration->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"mysqli");

        $password_reset_db_migration->createPasswordResetDatabase();

    }

    public function testExamDbMigration(){

        $test_exam_db_migration = new testExamDbMigration();

        $test_exam_db_migration->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"mysqli");

        $test_exam_db_migration->createTestExamDatabase();

    }

    public function resultDbMigration(){

        $result_db_migration = new resultDbMigration();

        $result_db_migration->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"mysqli");

        $result_db_migration->createResultDatabase();

    }

    public function infoDbMigration(){

        $info_db_migration = new infoDbMigration();

        $info_db_migration->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"mysqli");

        $info_db_migration->createInfoDatabase();

    }

}

$testing_database_migration = new testingDatabaseMigration();

//$testing_database_migration->testUserAccountDbMigration();

//$testing_database_migration->passwordResetDatabaseMigration();

//$testing_database_migration->testExamDbMigration();

//$testing_database_migration->resultDbMigration();

//$testing_database_migration->infoDbMigration();

?>