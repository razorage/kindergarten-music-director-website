<?php
    $category = $link[1];
    //echo $category;
?>

<section class = "main-outFiles">
    <?php //php код для ввода информации из массива в переменную $out
        echo '<pre>';
            $sql = "select * from allimportantinhand WHERE category = '".$category."'";
            $allImportantInHand = select($sql);
           // var_dump($allImportantInHand);
        echo '</pre>';
        $out = '';
        for ($i = 0; $i < count($allImportantInHand); $i++){
            $out .= '<div class = "main-outFiles-files">';
                $out .= $allImportantInHand[$i]["icon"];
                $out .= '<a href = "'.$allImportantInHand[$i]["links"].'">'.$allImportantInHand[$i]["name"].'</a>';
            $out .= '</div>';
        }
    ?>

    <h1 class = "main-outFiles-heading">
        <?php   //php код для вывода заголовка
            $sql = "select * from allimportantinhandname WHERE category = '".$category."'";
            $allimportantinhandname = select($sql);
            echo $allimportantinhandname[0]["name"];
        ?>
    </h1>
    <?php //выводим массивы данных
        echo $out;
       
    ?>
    <?php //выводим игры
        if ($category == 'LabArt'){
            echo '
            <iframe src="https://learningapps.org/watch?v=pbugwdqrc21" style="border:0px;width:100%;height:500px;" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
            <center>
                <button id = "reset">Начать заново</button>
            </center>
            <iframe src="https://learningapps.org/watch?v=prnf0f3d521" style="border:0px;width:100%;height:500px" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                <center>
                <button id = "reset">Начать заново</button>
            </center>
            ';
        }
    ?>
</section>
<section class = "main-outFiles">
    <div class="main-photoVidedo-imgFlex">
        <?php
            $array = outPhoto($category);
            echo $array
        ?>
    </div>
</section>
<script src="/js/showVieoAddClass.js"></script>

