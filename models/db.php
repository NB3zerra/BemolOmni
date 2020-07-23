<?php
class ConnectionFactory {
    private $dbType ='mysql';
    private $host = 'localhost';
    private $dbname = 'bemol_omni';
    private $username = 'root';
    private $password = '';
    private $conn;
    function __construct(){
        $this->conn = new PDO($this->dbType.":host=".$this->host.";dbname=".$this->dbname.", ".$this->username.", ".$this->password);
    }

    public function getConnection(){
        $connection = $this->conn;
        return $connection;
    }
} 

