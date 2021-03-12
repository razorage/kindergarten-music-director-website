<?
    checkUser(); //функция, которая проверяет куки
    echo 'Обновить файл';
?>

<?php
    echo $link[3].' ';
    echo $link[4].'<br>';

    if ($link[3] == 'allimportantinhand'){
        echo 1;
    }
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
    
<h1>Добавить файл  (word, excel, pdf, powerpoint, zip)</h1>
        <?php
            $getNameFile = getNameFile(); // категория
            $arrFiles = select("SELECT * FROM allimportantinhand;");
            $nameFile = select("select name from allimportantinhand where id =".$link[4].";")[0]['name'];//имя файла
            $linkFile = select("select links from allimportantinhand where id =".$link[4].";")[0]['links']; //ссылка файла
            $categoryFile = select("select category from allimportantinhand where id =".$link[4].";")[0]['category']; //категория файла
        ?>
        <form action="" method="POST">
            Название файла: <input name = "nameFile1" type = "text" id = "nameFile1" value="<?php echo $nameFile;  ?>"> <br><br>
            Ссылка: <input name = "linkFile1" id = "linkFile1" type = "text" placeholder="Ссылка из гугл диска" value = "<?php echo $linkFile;?>"> <br><br>
            Выбор категории: <select name="categoryFile1" id="">
                <?php //код php для вывода категорий
                    for ($i = 0; $i < count($getNameFile); $i++){
                        if ($categoryFile == $getNameFile[$i]['category']){
                            echo '<option selected>'.$getNameFile[$i]['category'].'</option>';
                        } else {
                            echo '<option>'.$getNameFile[$i]['category'].'</option>';
                        }
                    }
                ?>
            </select> <br><br>
            Иконка : <select name="iconFile1">
                <option>Word</option>
                <option>Excel</option>
                <option>PowerPoint</option>
                <option>Pdf</option>
                <option>Zip</option>
            </select><br><br>
            <input name = 'createFile' id = "b-File1" type="submit" value="Отправить">
        </form>
        <?php //код php для создания нового файла
            if (isset($_REQUEST['createFile'])){
                updateFile($_REQUEST['categoryFile1'], $_REQUEST['nameFile1'],$_REQUEST['iconFile1'],$_REQUEST['linkFile1'], $link[4]);
                echo '
                    <script> document.location.href = "/admin/delete" </script>;
                    Данные для создания файла отправлены
                ';
            }
        ?>
</body>
</html>