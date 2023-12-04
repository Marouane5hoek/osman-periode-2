<?php

include 'db.php';
$database = new Database();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gamenaam = $_POST['gamenaam'];
    $genre = $_POST['genre'];
    $platform = $_POST['platform'];

    try {
        $database->insertGame($gamenaam, $genre, $platform);
        echo " Success";
    } catch (PDOException $e) {
        echo "Error inserting: " . $e->getMessage();
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Spelers Voegen</title>
</head>
<body>
    <table class="table table-primary">
        <tr>
            <th>ID</th>
            <th>gamenaam</th>
            <th>genre</th>
            <th>platform</th>
            <th colspan="2">Actions</th>
        </tr>

        <tr>
            <?php $games = $database->selectGame();
            foreach($games as $game){ ?>
            <td><?php echo $game['id']?></td>
            <td><?php echo $game['gamenaam']?></td>
            <td><?php echo $game['genre']?></td>
            <td><?php echo $game['platform']?></td>
            <td><a class="btn btn-primary" href="edit.php?id=<?php echo $game['id']; ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?php echo $game['id']; ?>">Delete</a></td>
        </tr> <?php } ?>
    </table>

    <div class="d-flex justify-content-center align-items-center">
        <form method="POST">
            <input type="text" class="form-control" name="gamenaam" placeholder="Gamenaam"><br><br>
            <input type="text" class="form-control" name="genre" placeholder="genre"><br><br>
            <input type="text" class="form-control" name="platform" placeholder="platform"><br><br>
            <input type="submit" class="btn btn-primary" value="Toevoegen">
        </form>
    </div>
</body>
</html>