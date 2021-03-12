<?php

    function explodeUrl($link){
        return explode("/",$link);
    }

    function question(){//вывести заявки
        $sql = 'select id, name, email, comment, from_unixtime(time) from answerquestion ORDER BY time desc';
        $question = select($sql);
        return $question;
    }

    function getNameFile(){ //функция для получения имени категории для файла
        $category = "SELECT * FROM allimportantinhandname";
        $nameAndCategory = select($category);
        return $nameAndCategory;
    }
    function createFile($category, $name , $icons, $links){ //функция для создания файла
        $iconsFile = array( //массив с иконками
            'Word' => '<img src="https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png"/> ',
            'Excel' => '<img src="https://img.icons8.com/color/30/000000/microsoft-excel-2019--v1.png"/>',
            'PowerPoint' => '<img src="https://img.icons8.com/fluent/30/000000/microsoft-powerpoint-2019.png"/>',
            'Pdf' => '<img src="https://img.icons8.com/color/30/000000/pdf.png"/>',
            'Zip' => '<img src="https://img.icons8.com/fluent/30/000000/zip.png"/>',
        );
        $sql = "insert into allimportantinhand (category, name, icon, links) VALUES ('".$category."','".$name."','".$iconsFile[$icons]."','".$links."');";
        execQuery($sql);
    }

    function createVideo($name, $links, $category){ //функция для создания видео
        $sql = "insert into showvideo (name, links, category) VALUES ('".$name."','".$links."','".$category."');";
        execQuery($sql);
    }

    function getNameVideo(){//функция для получения имени категории для видео
        $category = "SELECT * FROM outvideoname";
        $nameAndCategory = select($category);
        return $nameAndCategory;
    }

    function createPhoto($name, $links, $category){ //функция для создания видео
        $sql = "insert into outphoto (name, links, category) VALUES ('".$name."','".$links."','".$category."');";
        execQuery($sql);
    }

    function updateFile($category, $name , $icons, $links, $id){ //функция для обновления файла
        $iconsFile = array( //массив с иконками
            'Word' => '<img src="https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png"/> ',
            'Excel' => '<img src="https://img.icons8.com/color/30/000000/microsoft-excel-2019--v1.png"/>',
            'PowerPoint' => '<img src="https://img.icons8.com/fluent/30/000000/microsoft-powerpoint-2019.png"/>',
            'Pdf' => '<img src="https://img.icons8.com/color/30/000000/pdf.png"/>',
            'Zip' => '<img src="https://img.icons8.com/fluent/30/000000/zip.png"/>',
        );
        $sql = "update allimportantinhand set category = '".$category."', name =  '".$name."', icon = '". $iconsFile[$icons]."', links = '".$links."' WHERE id = ".$id.";";
        execQuery($sql);
    }
    function updatePhoto($name, $links, $category, $id){ //функция для обновления фотографии
        $sql = "update outphoto set name = '".$name."', links =  '".$links."', category = '". $category."' WHERE id = ".$id.";";
        execQuery($sql);
    }
    function updateVideo($name, $links, $category, $id){ //функция для обновления видео
        $sql = "update showvideo set name = '".$name."', links =  '".$links."', category = '". $category."' WHERE id = ".$id.";";
        execQuery($sql);
    }

    function checkUser(){//проверяет куки
        if (isset($_COOKIE['login']) and isset($_COOKIE['password'])){
            $sql = 'select * from admin;';
            $checkArr = select($sql);

            if (($_COOKIE['login'] != $checkArr[0]['email']) || ($_COOKIE['password'] != $checkArr[0]['password'])){
                clearCookies();
            }
        } else {
            clearCookies();
        }
    }

    function clearCookies(){ //очищает куки
        setcookie('login', "", time()-60*60, "/");
        setcookie('password', "", time()-60*60, "/", null, null, true);
        unset($_GET['login']);
        unset($_GET['password']);
        header('Location: /');//переход в логин
    }
?>