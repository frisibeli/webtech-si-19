<?php
class DB{

    public $connection = null;
    private static $instance = null;

    private function __construct()
    {
        $this->connection = new PDO('mysql:host=db;dbname=blog', 'root', 'admin');
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new DB();
        }

        return self::$instance;
    }
}