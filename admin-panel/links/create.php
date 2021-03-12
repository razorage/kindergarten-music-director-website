<?
    checkUser(); //функция, которая проверяет куки
    echo 'создать файл';
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
<a href="/admin">Вернуть в админ панель</a>
    <h1>Подсказки</h1>
    <h2>Прежде чем создавать файл, смотрите сюда!!!!!!</h2>
    <h3>Категории Файлы и Фотографии</h3>
    <?php //код php для вывода категории и имен файла
        $getNameFile =  getNameFile();
        //var_dump($getNameFile);
        $out = '';
        for ($i = 0; $i < count($getNameFile); $i++){
            $out .= $getNameFile[$i]['category'].' - '.$getNameFile[$i]['name'].'<br>';
        }
        echo $out;
    ?>
    <h3>Категории Видео</h3>
    <?php //код php для вывода категории и имен видео
        $getNameVideo = getNameVideo();
        //var_dump($getNameFile);
        $out = '';
        for ($i = 0; $i < count($getNameVideo); $i++){
            $out .= $getNameVideo[$i]['category'].' - '.$getNameVideo[$i]['name'].'<br>';
        }
        echo $out;
    ?>
    <h3>
        Для создания файла (word, excel, pdf, powerpoint, zip) нужна ПРОСТАЯ ССЫЛКА (по типу: https://drive.google.com/drive/folders/1j-kQ5AEgijabxLh3bvi9dFqNRV5Eq9uf?usp=sharing)
    </h3>
    <h3>
        Для добавления фотографий, видео нужно уже их ВСТРАИВАТЬ (т.к. память не бесконечная, а у гугл она бесконечная), встроить это по типу ( iframe src="https://drive.google.com/file/d/19A53X3PJxq4KgEj6Zf6iN4HwJ3HEhSVv/preview" width="640" height="480"> iframe)
    </h3>
    
    

    <h1>Добавить файл  (word, excel, pdf, powerpoint, zip)</h1>
        <form action="" method="POST">
            Название файла: <input name = "nameFile1" type = "text" id = "nameFile1"> <br><br>
            Ссылка: <input name = "linkFile1" id = "linkFile1" type = "text" placeholder="Ссылка из гугл диска"> <br><br>
            Выбор категории: <select name="categoryFile1" id="">
                <?php //код php для вывода категорий
                    for ($i = 0; $i < count($getNameFile); $i++){
                        echo '<option>'.$getNameFile[$i]['category'].'</option>';
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
                createFile($_REQUEST['categoryFile1'], $_REQUEST['nameFile1'],$_REQUEST['iconFile1'],$_REQUEST['linkFile1']);
                echo '
                    <script> document.location.href = "/admin/create" </script>;
                    Данные для создания файла отправлены
                ';
            }
        ?>

    <h1>Добавить видео</h1>
        <form action="" method="POST">
            Название файла: <input name = "nameVideo1" type = "text" id = "nameVideo1"> <br><br>
            Ссылка: <input name = "linkVideo1" id = "linkVideo1" type = "text" placeholder="Ссылка из гугл диска"> <br><br>
            Выбор категории: <select name="categoryVideo1" id="">
                <?php //код php для вывода категорий
                    for ($i = 0; $i < count($getNameVideo); $i++){
                        echo '<option>'.$getNameVideo[$i]['category'].'</option>';
                    }
                ?>
            </select> <br><br>
            <input name = 'buttonVideo1' id = "b-Video1" type="submit" value="Отправить">
        </form>
        <?php //код php для создания нового файла
            if (isset($_REQUEST['buttonVideo1'])){
              createVideo($_REQUEST['nameVideo1'], $_REQUEST['linkVideo1'],$_REQUEST['categoryVideo1']);
                echo '
                    <script> document.location.href = "/admin/create" </script>;
                    Данные для создания файла отправлены
                ';
            }
        ?>

    <h1>Добавить Фотографию</h1>
        <form action="" method="POST">
            Название файла: <input name = "namePhoto1" type = "text" id = "namePhoto1"> <br><br>
            Ссылка: <input name = "linkPhoto1" id = "linkPhoto1" type = "text" placeholder="Ссылка из гугл диска"> <br><br>
                       Выбор категории: <select name="categoryPhoto1" id="">
                <?php //код php для вывода категорий
                    for ($i = 0; $i < count($getNameFile); $i++){
                        echo '<option>'.$getNameFile[$i]['category'].'</option>';
                    }
                ?>
            </select> <br><br>
            <input name = 'buttonPhoto1' id = "b-Photo1" type="submit" value="Отправить">
        </form>
        <?php //код php для создания нового файла
            if (isset($_REQUEST['buttonPhoto1'])){
                createPhoto($_REQUEST['namePhoto1'], $_REQUEST['linkPhoto1'],$_REQUEST['categoryPhoto1']);
                echo '
                    <script> document.location.href = "/admin/create" </script>;
                    Данные для создания файла отправлены
                ';
            }
        ?>
</body>
</html>