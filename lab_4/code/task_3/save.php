<?php
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $category = $_POST['category'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $dirName = "./categories/{$category}/{$email}";
    if(false === mkdir($dirName)) {
        throw new Exception("Error");
    }
    chmod($dirName, 0777);
    $fileName = "$dirName/{$title}.txt";
    if(false === file_put_contents($fileName, $desc)) {
        throw new Exception("Error");
    }
    chmod($fileName, 0777);
}
header('Location: /task_3/index.php');
exit();