<?php
class Database {
    public $pdo;
 
 
 
public function __construct($db = "telefoonwinkel", $user="root", $pwd="", $host="localhost:3307") {
    try {
        $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
 
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected to database $db";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
 
public function telefoons($merk, $model, $opslag, $prijs) {
   try {
       $sql = "INSERT INTO telefoons (Merk, Model, Opslag, Prijs) VALUES (?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
       $stmt->execute([$merk, $model, $opslag, $prijs]);
 
    echo "New record created successfully";
   } catch(PDOException $e) {
       echo "Error: " . $e->getMessage();
    }
  }
}

public function selectuser()   

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




</body>
</html>
 