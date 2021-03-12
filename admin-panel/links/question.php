<?
    checkUser(); //функция, которая проверяет куки
    echo 'Заявки';
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
    <style>
       
    </style>
    <a href="/admin">Вернуть в админ панель</a>
    <?php //выводим заявки
        //from_unixtime(time)
        $array = question();
        //var_dump($array);
        $out = '';
        for($i = 0; $i < count($array); $i++){
            $out .= '<tr>';
                $out .=  '<td>'.$array[$i]['id'].'</td>';
                $out .=  '<td>'.$array[$i]['name'].'</td>';
                $out .=  '<td>'.$array[$i]['email'].'</td>';
                $out .=  '<td>'.$array[$i]['comment'].'</td>';
                $out .=  '<td>'.$array[$i]['from_unixtime(time)'].'</td>';
            $out .= '</tr>';
        }
        
    ?>
    <center>
    <table>
    <h1>Просмотреть заявки</h1>
        <?php
            echo $out;
        ?>
    </table>
    </center>
    
   
   
</body>
</html>