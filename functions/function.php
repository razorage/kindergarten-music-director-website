<?php //код php дляразделения url
    function explodeUrl($link){ //функция для разделения url строки
        return explode("/", $link);
    }
?>

<?php //код php для вывода фотогафий
    function showPhoto(){
       //return filesize('20170222_101152_Burst01.jpg');
       $array = scandir('./img/photo');
       $out = '';
       for ($i = 2; $i < count($array); $i++){
            $out .= '<div class = "main-photoVidedo-flex-marginLeft">';
                $out .= '<img src ="/img/photo/'.$array[$i].'">';
            $out .= '</div>';
       }
       return $out;
       //$array = array_unshift($array);
    }
?>

<?php
    function showVideo($category){ //php код для вывода видео из бд
        $sql = "select * from showvideo where category ='".$category."';";
        $array = select($sql);
        $out = '';
        for ($i = 0; $i< count($array); $i++){
            $out .= '<div class="main-photoViedo-videoFlex-flex">';
                $out .= $array[$i]['links'];
                $out .= '<center>';
                $out .= '<div class = "main-photoViedo-videoFlex-flex-heading">';
                    $out .= $array[$i]['name'];
                $out .= '</div>';
            $out .= '</center>';
            $out .= '</div>';
        }
        return $out;
    }
?>

<?php //функция для слайдера
     function outPhoto($category){ //php код для вывода фотографий из бд
        $sql = "select * from outphoto where category ='".$category."';";
        $array = select($sql);
        $out = '';
        for ($i = 0; $i< count($array); $i++){
            $out .= '<div class="main-photoViedo-videoFlex-flex">';
                $out .= $array[$i]['links'];
                $out .= '<center>';
                $out .= '<div class = "main-photoViedo-videoFlex-flex-heading">';
                    $out .= $array[$i]['name'];
                $out .= '</div>';
            $out .= '</center>';
            $out .= '</div>';
        }
        return $out;
    }
?>

<?php 
    function sendQuestion($name, $email, $comment, $time){ //функция для отправки данных
        $sql = "insert into answerquestion (name, email, comment, time) VALUES ('".$name."', '".$email."', '".$comment."', '".$time."');";
        execQuery($sql);
         echo '
            <script>
                setTimeout(()=>{
                    window.location.href = "/";
                },5000);
                confirm("Данные отправлены, с вами свяжутся");
            </script> 
        ';
    }
?>