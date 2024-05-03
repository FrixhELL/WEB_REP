<!DOCTYPE html>
<html lang="en">
<head>
    <title>Главная страница</title>
</head>
<body>
<form action="counter.php" method="post">
    <label for="text">Введите текст на английском</label>
    <br>
    <textarea id="text" name="text"></textarea>
    <br>
    <input type="submit" value ="Посчитать"/>
</form>
<br>
<header>Данные Человека</header>
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
<br>
<header>Данные Рабочего</header>
<form action="workerData.php" method="post">
    <label for="workerName">Name</label>
    <input type="text" name="workerName" id="workerName"/>
    <br>
    <label for="workerAge">Age</label>
    <input type="number" name="workerAge" id="workerAge"/>
    <br>
    <label for="workerOffice">Office</label>
    <input type="text" name="workerOffice" id="workerOffice"/>
    <br>
    <label for="workerSalary">Salary</label>
    <input type="number" name="workerSalary" id="workerSalary"/>
    <br>
    <input type="submit" value ="Ввести данные"/>
</form>
</body>
</html>