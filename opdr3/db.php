<?php



class Database {
    public $pdo;

    
    public function __construct($database = "gamewinkel", $user = "root", $pwd="Nederlands", $host="localhost:3306") {
        try{
            $this->pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected to database $database";
    } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    
    }
    public function insertGame($a, $b, $c) {
        $sql = "INSERT INTO games VALUES (null, :gamenaam, :genre, :platform)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['gamenaam' => $a, 'genre' => $b, 'platform' => $c]);    
    }

    public function selectGame() {
        if (empty($id)) {
            $stmt = $this->pdo->query("SELECT * FROM games");
            $result = $stmt->fetchAll();
            return $result;
        } else {
            $stmt = $this->pdo->prepare("SELECT * FROM games WHERE id = ?");
            $stmt->execute([$id]);
            $result = $stmt->fetch();
            return $result;
        }
    }
}
?>