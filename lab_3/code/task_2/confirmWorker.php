<?php
session_start();
if(false === isset($_SESSION["workerData"])){
    header('Location: /task_2/form.php');
    exit();
}
$arr = $_SESSION["workerData"];
echo "<h1>Worker Data</h1>";
echo "<ul>\n";
foreach($arr as $item) {
    echo "<li>$item</li>\n";
}
echo "</ul>";