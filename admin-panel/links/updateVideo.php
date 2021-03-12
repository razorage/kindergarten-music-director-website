<?
    checkUser(); //функция, которая проверяет куки
    echo 'Обновить файл';
?>

<?php
    echo $link[3].' ';
    echo $link[4].'<br>';
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
            $getNameVideo = getNameVideo();
            $nameVideo = select('select name from showvideo WHERE id = '.$link[4].';')[0]['name'];
            $linkVideo = select('SELECT links FROM `showvideo` WHERE id = '.$link[4].';')[0]['links'];
            $category = select('select category from showvideo WHERE id = '.$link[4].';')[0]['category'];
        ?>
    
       
        <h1>Добавить видео</h1>
        <form action="" method="POST">
            Название файла: <input name = "nameVideo1" type = "text" id = "nameVideo1" value = "<?php echo $nameVideo; ?>"> <br><br>
            Ссылка: <input name = "linkVideo1" id = "linkVideo1" type = "text" placeholder="Ссылка из гугл диска" value = '<?php echo $linkVideo; ?>'> <br><br>
            Выбор категории: <select name="categoryVideo1" id="">
                <?php //код php для вывода категорий
                    for ($i = 0; $i < count($getNameVideo); $i++){
                        if ($category == $getNameVideo[$i]['category']){
                            echo '<option selected>'.$getNameVideo[$i]['category'].'</option>';
                        } else {
                            echo '<option>'.$getNameVideo[$i]['category'].'</option>';
                        }
                    }
                ?>
            </select> <br><br>
            <input name = 'buttonVideo1' id = "b-Video2" type="submit" value="Отправить">
        </form>
        <?php //код php для создания нового файла
            if (isset($_REQUEST['buttonVideo1'])){
                updateVideo($_REQUEST['nameVideo1'], $_REQUEST['linkVideo1'],$_REQUEST['categoryVideo1'], $link[4]);
                echo '
                    <script> document.location.href = "/admin/delete" </script>;
                    Данные для создания файла отправлены
                ';
            }
        ?>
</body>
</html>