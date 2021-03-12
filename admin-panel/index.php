<?php
    require_once './functions/function-access.php';
    require_once './functions/function-db.php';
    require_once './functions/function.php';
    
    $conn = connect();
    echo $_COOKIE['name'];
    $link = $_GET['link'];
    $link = explodeUrl($link);
    if ($link[0] == '' OR $link[0] == null){
        require_once './links/login.php';
    } else if($link[0] == 'admin' and $link[1] == 'question'){
        require_once './links/question.php';
    } else if($link[0] == 'admin' and $link[1] == 'create'){
        require_once './links/create.php';
    } else if($link[0] == 'admin' and $link[1] == 'delete' and $link[2] =='deleteFile'){
        require_once './links/deleteFile.php';
    } else if($link[0] == 'admin' and $link[1] == 'delete' and $link[2] =='updateFile'){
        require_once './links/updateFile.php';
    } else if($link[0] == 'admin' and $link[1] == 'delete' and $link[2] =='updateVideo'){
        require_once './links/updateVideo.php';
    } else if($link[0] == 'admin' and $link[1] == 'delete' and $link[2] =='updatePhoto'){
        require_once './links/updatePhoto.php';
    } else if($link[0] == 'admin' and $link[1] == 'delete'){
        require_once './links/delete.php';
    } else if($link[0] == 'admin' and $link[1] == 'update'){
        require_once './links/update.php';
    } else if($link[0] == 'admin'){
        require_once './links/admin.php';
    } else {
        require_once './links/404.php';
    }
?>
<script src="/js/CheckForm.js"></script>