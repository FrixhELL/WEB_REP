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
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Email</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        for($i = 2; $i < count($categories); $i++) {
            $category = $categories[$i];
            $emails = scandir("./categories/{$category}");
            for($j = 2; $j < count($emails); $j++) {
                $email = $emails[$j];
                $items = scandir("./categories/{$category}/{$email}");
                for($k = 2; $k < count($items); $k++) {
                    $product = $items[$k];
                    $desc = file_get_contents("./categories/{$category}/{$email}/{$product}");
                    $title = substr($product, 0, strlen($product) - 4);
                    echo "<tr>";
                    echo "<td>$category</td>";
                    echo "<td>$title</td>";
                    echo "<td>$email</td>";
                    echo "<td>$desc</td>";
                    echo "</tr>";
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>