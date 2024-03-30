<?php
session_start();
if(false === isset($_SESSION["personName"], $_SESSION["personSurname"], $_SESSION["personAge"])){
    header('Location: /task_2/form.php');
    exit();
}
$name = $_SESSION["personName"];
$surname = $_SESSION["personSurname"];
$age = $_SESSION["personAge"];
echo "Имя - $name, Фамилия - $surname, Возраст - $age";