<?php
session_start();

if (!isset($_SESSION["priv"])) {
    die(header("Location: index.php?error=2"));
}

include_once("php/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["user_id"])) {
        die(header("Location: index.php?error=2"));
    }

    $user_id = $_SESSION["user_id"];
    $title = $_POST["title"];
    $start = $_POST["start"];
    $end = $_POST["end"];
    $description = $_POST["description"];

    $stmt = $mysqli->prepare("INSERT INTO events (created_by, title, start, end, description) VALUES (?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("issss", $user_id, $title, $start, $end, $description);
        $stmt->execute();
        $stmt->close();
        
        header("Location: panel.php");
    } else {
        echo "Greška u pripremi upita: " . $mysqli->error;
    }
} else {
    die("Neispravan zahtev.");
}
?>
