<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index3.css">
</head>
<body>
    <div class="head">
        <h2>Практическое задание №3</h2>
    </div>
    <div><form action="" method="post">
    <fieldset>
        <legend>Анкета</legend>
        <label>Фамилия<br><input class="f" type="text" name="surname"></label></br> 
        <label>Имя<br><input class="f" type="text" name="name"></label></br>
        <label>Отчество<br><input class="f" type="text" name="lastname"></label></br>
        <label>Год рождения<br><input class="field" type="date" name="date"></label></br>
        <label><b>Пол</b></label><br>
        <label><input type="radio" name="gender" id="a" value="Мужской">Мужской</label>
        <label><input type="radio" name="gender" id="b" value="Женский">Женский</label>
        <br><input class="button" type="submit" value="Отправить" name="search_example_1"></br>
    </fieldset>
</form>
</div>

<?php
if (isset($_POST["search_example_1"])) {
    echo "<div class=out>";
    echo "<h2>Вами были введены следующие данные: </h2>";

    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $date = $_POST["date"];
    $gender = $_POST["gender"];

    echo "<p>ФИО: $surname $name $lastname</p>";
    echo "<p>Год рождения: $date</p>";
    echo "<p>Пол: $gender</p>";
    echo "</div>";
}

?>
</body>
</html>
