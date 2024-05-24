<?php
include_once("php/db.php");

$query = $mysqli->query("SELECT id, title, start, end, description FROM events");

$events = array();

while($row = $query->fetch_assoc()) {
    $events[] = array(
        'id' => $row['id'],
        'title' => $row['title'],
        'start' => $row['start'],
        'end' => $row['end'],
        'description' => $row['description']
    );
}

echo json_encode($events);
?>
