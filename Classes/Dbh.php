<?php

class Dbh
{
    private $host = "localhost";
    private $dbname = "myfirstdatabase";
    private $dbusername = "root";
    private $dbpassword = "";

    protected function connect()
    {
        $conn = new mysqli($this->host, $this->dbusername, $this->dbpassword, $this->dbname);

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        // echo "connected successfuly";

        return $conn;
    }
}
