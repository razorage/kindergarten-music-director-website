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
            $getNameFile =  getNameFile();
            $namePhoto = select('select name from outphoto WHERE id = '.$link[4].';')[0]['name'];
            $linkVideo = select('select links from outphoto WHERE id = '.$link[4].';')[0]['links'];
            $category = select('select category from outphoto WHERE id = '.$link[4].';')[0]['category'];
        ?>
    
        <h1>Добавить Фотографию</h1>
        <form action="" method="POST">
            Название файла: <input name = "namePhoto1" type = "text" id = "namePhoto1" value = '<?php echo $namePhoto; ?>'> <br><br>
            Ссылка: <input name = "linkPhoto1" id = "linkPhoto1" type = "text" placeholder="Ссылка из гугл диска" value = '<?php echo $linkVideo; ?>'> <br><br>
                       Выбор категории: <select name="categoryPhoto1" id="">
                <?php //код php для вывода категорий
                    for ($i = 0; $i < count($getNameFile); $i++){
                        if ($category == $getNameFile[$i]['category']){
                            echo '<option selected>'.$getNameFile[$i]['category'].'</option>';
                        } else {
                            echo '<option>'.$getNameFile[$i]['category'].'</option>';
                        }
                    }
                ?>
            </select> <br><br>
            <input name = 'buttonPhoto1' id = "b-Photo1" type="submit" value="Отправить">
        </form>
        <?php //код php для создания нового файла
            if (isset($_REQUEST['buttonPhoto1'])){
                updatePhoto($_REQUEST['namePhoto1'], $_REQUEST['linkPhoto1'],$_REQUEST['categoryPhoto1'], $link[4]);
                echo '
                    <script> document.location.href = "/admin/delete" </script>;
                    Данные для создания файла отправлены
                ';
            }
        ?>
</body>
</html>