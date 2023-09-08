<?php

class Signup extends Dbh
{
    private $username;
    private $pwd;

    public function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insertUser()
    {
        $query = "INSERT INTO users (username, pwd) VALUES (?,?);";
        $conn = parent::connect();
        //OR
        // $conn = $this->connect()
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $this->username, $this->pwd);
        $result = $stmt->execute();
        if ($result === false) {
            $error = $stmt->error;
            echo "Error: $error";
            die();
        } else {
            $stmt->close();
            $conn->close();
            header('Location:../index.php');
            die();
        }
    }
    private function isEmptySubmit()
    {
        if (empty($this->username) || empty($this->pwd)) {
            return true;
        } else {
            return false;
        }
    }
    public function signupUser()
    {
        //Error Handlers
        if ($this->isEmptySubmit()) {
            echo "in errror handler";
            header('Location:../index.php');
            die();
        }
        // if no errors signup user
        $this->insertUser();
    }
}
