<?php

class Conexion 
{
private $host = "localhost";
private $user = "root";
private $pass = "";
private $db = "cbh";
private $conPDO;


    public function __construct(){
        try {
            $this->conPDO = new PDO(
            "mysql:dbname=$this->db;host=$this->host", $this->user, $this->pass
            );
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
    }


    public function getConPDO()
{
    return $this->conPDO;
}
}


