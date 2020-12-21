<?php

class DBConn
{
    public $conn;

    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "php-jquery-todoList";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
