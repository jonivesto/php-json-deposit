<?php require("/auth.php");

$file = fopen("safe/data.json", "w") or die("unable to open file");
fwrite($file, $_POST["json"]);
fclose($file);
