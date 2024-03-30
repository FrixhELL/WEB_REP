<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avito</title>
</head>
<body>
<form action="save.php" method="post">
    <label for="category">Category</label>
    <select name="category" required>
        <?php
        $categories = scandir("./categories");
        for ($i = 2; $i < count($categories); $i++) {
            $category = $categories[$i];
            echo "<option value=\"$category\">$category</option>";
        }
        ?>
    </select>
    <br>
    <label for="email">email</label>
    <input type="email" name="email" required>
    <br>
    <label for="title">Title</label>
    <input type="text" name="title" required>
    <br>
    <label for="description">Desription</label>
    <br>
    <textarea name="description" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Добавить">
</form>
<br><br>

</body>
</html>