<?php
    $photAndVideo = $link[1];
    $category = $link[2];
    $name = '';
    if ($link[1] == 'photo'){
        $name = 'Наша история';
        $out = showPhoto();
    } else if ($link[1] == 'video'){
        if($link[2] == 'videoClips'){
            $name = 'Видеоклипы';
        } else if ($link[2] == 'childrenTeatr'){
            $name = 'Детский театр';
        } else if ($link[2] == 'bravoChildren'){
            $name = 'Браво, дети';
        }
        $out = showVideo($category);
    } else {
        $name = 'Фото и видео материалы';
        $out .= showPhoto();
        $out .= outPhoto('workParentWithPedagogos');
        $out .= outPhoto('workParentWithPedagogos');
        $out .= outPhoto('MusicDidactGames');
        $out .= outPhoto('goodHand');
        $out .= showVideo('videoClips');
        $out .= showVideo('childrenTeatr');
        $out .= showVideo('bravoChildren');
    }
?>

<section class = "main-outFiles">
    <h1 class = "main-outFiles-heading">
        <?php   //php код для вывода заголовка
            echo $name;
        ?>
    </h1>
    <div class="main-photoVidedo-imgFlex">
        <?php
            echo $out;
        ?>
    </div>
</section>
<script src="/js/showVieoAddClass.js"></script>