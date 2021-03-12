<?php
    checkUser(); //функция, которая проверяет куки
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/css/index.css">
    <title>Document</title>
</head>
<body>
    <?php
        $sql = 'select * from admin;';
        $checkArr = select($sql);
    ?>
    <h1>
        Добро пожаловать <?php echo $checkArr[0]['name']; ?>
    </h1>
    <h2>
        Чего бы вы хотели
    </h2>
        <a href="admin/create">Добавить файл</a><br><br>
        <a href="admin/delete">Удалить файл/Редактировать файл</a><br><br>
        <a href="admin/question">Просмотреть заявки</a><br><br>
    <?php
        
    ?>
</body>
</html>

