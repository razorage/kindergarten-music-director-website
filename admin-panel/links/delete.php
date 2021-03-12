<?
    checkUser(); //функция, которая проверяет куки
    echo 'удалить файлы';
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
    <h1>Удаление файлов</h1>
    <h2>Дважды подумайте, преждем чем удалять что-либо, т.к. удаленный файл с базы данных, невозможно восстановить!</h2>
    <?php //
        $arrFiles = select("SELECT * FROM allimportantinhand;");
        $arrPhoto = select("SELECT * FROM outphoto;");
        $arrVideo = select("SELECT * FROM showvideo;");
    ?>

    <h1 style="text-align:center; color:red;">ФАЙЛЫ (word, excel, powerpoint, pdf, zip)</h1>
    <table>
        <?php //выводим файлы
            $outFiles = '';
            $outFiles.='<th>Номер</th><th>Категория</th><th>Название</th><th>Тип файла</th><th>Ссылка</th><th>Удалить</th><th>Обновить</th>';
            for ($i = 0; $i < count($arrFiles); $i++){
                $outFiles .= '<tr>';
                    $outFiles .= '<td>'.$arrFiles[$i]['id'].'</td>';
                    $outFiles .= '<td>'.$arrFiles[$i]['category'].'</td>';
                    $outFiles .= '<td>'.$arrFiles[$i]['name'].'</td>';
                    $outFiles .= '<td>'.$arrFiles[$i]['icon'].'</td>';
                    $outFiles .= '<td>'.$arrFiles[$i]['links'].'</td>';
                    $outFiles .= '<td>  <a href="/admin/delete/deleteFile/allimportantinhand/'.$arrFiles[$i]['id'].'" onclick="return confirm(\'Точно ?\')">Удалить</a> </td>';
                    $outFiles .= '<td>  <a href="/admin/delete/updateFile/allimportantinhand/'.$arrFiles[$i]['id'].'" onclick="return confirm(\'Точно ?\')">Обновить</a> </td>';
                $outFiles .= '</tr>';
            }
            echo $outFiles; //вывести файлы (проверено)
        ?>
    </table>
    <h1 style="text-align:center; color:red;">Фотографии</h1>
    <table>
        <?php //выводим Фотографии
            $outPhoto = '';
            $outPhoto.='<th>Номер</th><th>Название</th><th>Ссылки</th><th>Категории</th><th>Удалить</th><th>Обновить</th>';
            for ($i = 0; $i < count($arrPhoto); $i++){
                $outPhoto .= '<tr>';
                    $outPhoto .= '<td>'.$arrPhoto[$i]['id'].'</td>';
                    $outPhoto .= '<td>'.$arrPhoto[$i]['name'].'</td>';
                    $outPhoto .= '<td>'.$arrPhoto[$i]['links'].'</td>';
                    $outPhoto .= '<td>'.$arrPhoto[$i]['category'].'</td>';
                    $outPhoto .= '<td>  <a href="/admin/delete/deleteFile/outphoto/'.$arrPhoto[$i]['id'].'" onclick="return confirm(\'Точно ?\')">Удалить</a> </td>';
                    $outPhoto .= '<td>  <a href="/admin/delete/updatePhoto/outphoto/'.$arrPhoto[$i]['id'].'" onclick="return confirm(\'Точно ?\')">Обновить</a> </td>';
                    $outPhoto .= '</tr>';
            }
           echo $outPhoto; //вывести фотографии (проверено)
        ?>
    </table>
    <h1 style="text-align:center; color:red">Видео</h1>
    <table>
        <?php //выводим видео
            
            $outVideo = '';
            $outVideo.='<th>Номер</th><th>Название</th><th>Ссылки</th><th>Категории</th><th>Удалить</th><th>Обновить</th>';
            for ($i = 0; $i < count($arrVideo); $i++){
                $outVideo .= '<tr>';
                    $outVideo .= '<td>'.$arrVideo[$i]['id'].'</td>';
                    $outVideo .= '<td>'.$arrVideo[$i]['name'].'</td>';
                    $outVideo .= '<td>'.$arrVideo[$i]['links'].'</td>';
                    $outVideo .= '<td>'.$arrVideo[$i]['category'].'</td>';
                    $outVideo .= '<td>  <a href="/admin/delete/deleteFile/showvideo/'.$arrVideo[$i]['id'].'" onclick="return confirm(\'Точно ?\')">Удалить</a> </td>';
                    $outVideo .= '<td>  <a href="/admin/delete/updateVideo/showvideo/'.$arrVideo[$i]['id'].'" onclick="return confirm(\'Точно ?\')">Обновить</a> </td>';
                $outVideo .= '</tr>';
            }
            echo $outVideo; //вывести видео 
        ?>
    </table>
</body>
</html>