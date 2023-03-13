<?php
class conexao{
    $servername = "localhost";
    $username = "username";
    $password = "password";
 
    try {
        $conn = new PDO(
            "mysql:host=$servername;dbname=myDB",
            $username, $password);
   
            // Set the PDO error mode
            // to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
   
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: "
            . $e->getMessage();
        }
}
