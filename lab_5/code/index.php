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
        <option value="cars">cars</option>
        <option value="other">other</option>
        <option value="peripherals">peripherals</option>
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
            $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
            if (mysqli_connect_errno()) {
                printf( "Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
                exit;
            }
            if($result = $mysqli->query("SELECT * FROM ad ORDER BY created DESC"))
            {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach (['title', 'category', 'description', 'email'] as $column) {
                        echo "<td>{$row[$column]}</td>";
                    }
                    echo "</tr>";
                }
                $result->close();
            }
            $mysqli->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>