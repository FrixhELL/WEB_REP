<!DOCTYPE html>
<html lang="en">
<head>
    <title>Главная страница</title>
</head>
<body>
<form action="counter.php" method="post">
    <label for="text">Enter your text</label>
    <br>
    <textarea id="text" name="text"></textarea>
    <br>
    <input type="submit" value ="Посчитать"/>
</form>
<br>
<form action="personalData.php" method="post">
    <label for="personName">Name</label>
    <input type="text" name="personName" id="personName"/>
    <br>
    <label for="personSurname">Surname</label>
    <input type="text" name="personSurname" id="personSurname"/>
    <br>
    <label for="personAge">Age</label>
    <input type="number" name="personAge" id="personAge"/>
    <br>
    <input type="submit" value ="Ввести данные"/>
</form>
</body>
</html>