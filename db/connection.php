<?php 
class Connection{
    public static function Connect(){
        define('server','localhost');
        define('db_name','ecommerce');
        define('user','root');
        define('password','');
        $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $connection = new PDO("mysql:host=".server."dbname=".db_name,user,password,
            $option);
        } catch (exception $e) {
            die("Connection error:".$e->getMessage());
        }
    }
}

?>