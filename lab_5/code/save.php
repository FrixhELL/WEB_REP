<?php
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $category = $_POST['category'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

}
header('Location: /index.php');
exit();