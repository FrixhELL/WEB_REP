<?php
if(false === isset($_POST["text"])) {
    header('Location: /form.php');
    exit();
}
$text = $_POST["text"];
echo "Количество слов: ", str_word_count($text), "<br>";
echo "Количество символов: ", strlen($text);