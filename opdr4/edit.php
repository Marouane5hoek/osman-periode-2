<?php

include 'db.php';
$database = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $database->editUser($_POST['gamenaam'], $_POST['genre'], $_POST['platform'], $_POST['id']);
        header('Location: home.php?success=Success');
    } catch (PDOException $e) {
        echo "Error updating: " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body class="bg-success">
<div class="d-flex justify-content-center align-items-center">
    <form method="POST">
        <input type="hidden" name="id" value="1">
        <input type="text" class="form-control" name="gamenaam" placeholder="Gamenaam"><br><br>
        <input type="text" class="form-control" name="genre" placeholder="Genre"><br><br>
        <input type="number" class="form-control" name="platform" placeholder="Platform"><br><br>
        <input type="submit" class="btn btn-primary" value="Toevoegen">
    </form>
</div>
</body>
</html>