<?php

class Database {

    private $host     = 'localhost';
    private $dbName   = 'blog_api';
    private $userName = 'root';
    private $pass     = '';
    private $conn;

    public function connect()
        {
             $this->conn = null;
            try {
                echo "ok";
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname= ' . $this->dbName, $this->userName, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $error) {
                echo 'Connection error: ' . $error->getMessage();
            }

            return $this->conn;
        }

}

$p = new Database();

$p;