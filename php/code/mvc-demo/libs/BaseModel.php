<?php
require 'DB.php';

class BaseModel{
    private $connection;
    public function __construct()
    {
        $this->connection = DB::getInstance()->connection;
    }

    public function get($email){
        $query = $this->connection->query("SELECT * FROM {$this->table}");
        return $query->fetchAll();
    }


}
