<?php
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $category = $_POST['category'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
    if (mysqli_connect_errno()) {
        printf( "Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }
    $mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$desc', '$category')");
}
header('Location: /');
exit();