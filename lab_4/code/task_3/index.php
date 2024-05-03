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
            require('vendor/autoload.php');
            $client = new Google_Client();
            $client->setApplicationName('lab-4');
            $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
            $client->setAccessType('offline');
            $client->setAuthConfig('credentials.json');

            $service = new Google_Service_Sheets($client);
            $spreadsheetId = "1bKXPauAFhzRgPlBbTjeXsAt1RMr5CbobKJfHi4Vtc-g";
            $listName = "PHP-LAB4";
        ?>
        </tbody>
    </table>
</div>
</body>
</html>