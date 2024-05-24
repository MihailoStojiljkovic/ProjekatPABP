<?php
session_start();

if (!isset($_SESSION["priv"])) {
    die(header("Location: index.php?error=2"));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Create Event</title>
</head>
<body>
    <div class="container">
        <h2>Create Event</h2>
        <form action="save_event.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="start">Start Date and Time:</label>
                <input type="datetime-local" class="form-control" id="start" name="start" required>
            </div>
            <div class="form-group">
                <label for="end">End Date and Time:</label>
                <input type="datetime-local" class="form-control" id="end" name="end" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>
</body>
</html>
