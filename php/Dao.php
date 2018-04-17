<?php

class DAO {
    private $servername = "localhost";
    private $db = "users";
    private $username = "root";
    private $password = "";

    public function getConnection() { 
        return new PDO("mysql:host=127.0.0.1;dbname={$this->db}", $this->username, $this->password);
    }
    
    public function getUser($email) {
        $conn = $this->getConnection();
        $getQuery = 
            "SELECT email
            FROM users
            WHERE email = :email";
        $q = $conn->perpare($getQuery);
        $q->bindParam(":email", $email);
        $q->execute();
    }

    public function saveUser($first_name, $last_name, $email, $pass) {
        $conn = $this->getConnection();
        $saveQuery = 
        "INSERT INTO persons
            (first_name, last_name, email, pass)
            VALUES
            (:first_name, :last_name, :email, :pass)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":first_name", $first_name);
        $q->bindParam(":last_name", $last_name);
        $q->bindParam(":email", $email);
        $q->bindParam(":pass", $pass);
        $q->execute();
    }
}


?>
