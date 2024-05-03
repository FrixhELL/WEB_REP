<?php
session_start();
if(true === isset($_POST["personName"], $_POST["personSurname"], $_POST["personAge"] )){
    $_SESSION["personName"] = $_POST["personName"];
    $_SESSION["personSurname"] = $_POST["personSurname"];
    $_SESSION["personAge"] = $_POST["personAge"];
}
header('Location: /task_2/resultData.php');
exit();