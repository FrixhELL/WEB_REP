<?php
session_start();
if(true === isset($_POST["workerName"], $_POST["workerAge"], $_POST["workerOffice"], $_POST["workerSalary"] )){
    $_SESSION["workerData"] = [$_POST["workerName"], $_POST["workerAge"], $_POST["workerOffice"], $_POST["workerSalary"]];
}
header('Location: /task_2/confirmWorker.php');
exit();