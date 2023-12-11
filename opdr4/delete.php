<?php

include 'db.php';
$database = new Database();

if(isset($_GET['id'])) {
    try {
        $database->deleteUser($_GET['id']);
        header("Location:home.php?Success");
    } catch (PDOException $e) {
        echo "Error inserting: " . $e->getMessage();
    }
}
?>