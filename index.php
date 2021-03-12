<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/css/index.css">
    <link rel="shortcut icon" href="https://img.icons8.com/ios-filled/50/000000/music-conductor.png" type="image/x-icon">
    <title>Музыкальный руководитель</title>
    <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
    <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</head>
<body>

    <!--Шапка-->
    <header>
        <div class="head header-aboutMe">
            <a href="/">Обо мне</a>
        </div>
        <div class="head header-methodKopilka">
            <a id = 'a-1' href="/">Обмен опытом</a>
        </div>
        <div class="head header-photoAndVideo">
            <a href="/photoAndVideo">Фото и видеоматериалы</a>
        </div>
        <div class = "head header-contacts">
            <a id = 'a-2' href="/">Контакты</a>
        </div>
        <div class="versionForVadSee">
            <a id="specialButton" href="#"><img src="https://lidrekon.ru/images/special.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
        </div>
        
    </header>
    <!--Шапка заканчивается-->


    <!--Меню-->
    <main>
        <?php //код php для вывода информации в main
            require_once './functions/function-db/function-access.php';
            require_once './functions/function-db/function-db.php';
            require_once './functions/function.php';
            $conn = connect();
            
            $link = $_GET['link'];
            $link = explodeUrl($link);
            // var_dump($link);

            if ($link[0] == "" OR is_null($link[0])){
                require_once './links/main.php';
            } else if ($link[0] == "inHand"){
                require_once './links/inHand.php';
            } else if ($link[0] == "photoAndVideo"){
                require_once './links/photoAndVideo.php';
            } else {
                require_once './links/404.php';
            }
        ?>
        <section class ="answer">
            <button class = "answer-close">
                <img class = "answer-close-img" src="https://img.icons8.com/material-sharp/50/000000/multiply.png"/>
            </button>
            <div class = "answer-heading">Задайте мне вопрос, и я постараюсь ответить на него</div>
            <form action="" method="POST"> <!--Форма для отрпавки сообщений-->
                <div class="answer-pole">
                    Введите имя:
                    <input id = "name1" type="text" placeholder="Иванов Иван" name = "name1">
                </div>
                <div class="answer-pole">
                    Введите вашу почту:
                    <input id = "email1" type="email" name="email1" placeholder = "ivanovivan@mail.ru">
                </div>
                <div class = "answer-pole">
                    Оставьте комментарий:
                    <textarea name="comment1" id="comment" cols="30" rows="10" placeholder="Комментарий"></textarea>
                </div>
                    <center>
                        <input name = "button1" type="submit" value="Задать вопрос" class = "answer-button">
                        <div>
                            <?php //код для отправки сообщения
                                $time = time();
                                if ($_REQUEST['button1']){
                                    sendQuestion($_REQUEST['name1'], $_REQUEST['email1'], $_REQUEST['comment1'] ,$time);
                                }
                            ?>
                        </div>
                    </center>
            </form>
        </section>
        <section class = "question">
            <h1 class = "question-heading">
                Хотите задать вопрос ?
            </h1>
            <form action="" method="POST">
                <div class= "question-pole">
                    Введите имя:
                    <input type="text" name="name2" id="name2" placeholder="Введите имя">
                </div>
                <div class= "question-pole">
                    Введите почту:
                    <input type="email" name="email2" id="email2" placeholder="Введите почту">
                </div>
                <div class= "question-pole">
                    Ваш вопрос:
                    <textarea name="comment2" id="comment2" placeholder="Ваш вопрос"></textarea>
                </div>
                <center>
                <input name = "button2" type="submit" value="Задать вопрос" class = "querstion-button">
                        <div>
                            <?php //код для отправки сообщения
                                $time = time();
                               if ($_REQUEST['button2']){
                                    sendQuestion($_REQUEST['name2'], $_REQUEST['email2'], $_REQUEST['comment2'] ,$time);
                                }
                            ?>
                        </div>
                </center>
            </form>
        </section>
        <button class = "mobileVersion-button">
                <img src="https://img.icons8.com/metro/30/000000/menu.png"/>
            </button>
        <section class = "mobileVersion">
            <button class = "answer-close">
                <img id = "b-1" class="answer-close-img" src="https://img.icons8.com/material-sharp/50/000000/multiply.png">
            </button>
           <div class="mbVersion">
               <a href="/">Обо мне</a>
           </div>
           <div class="mbVersion">
               <a id = "a-3" href="/">Обмен опытом</a>
           </div>
           <div class="mbVersion">
               <a href="/photoAndVideo">Фото и видеоматериалы</a>
           </div>
           <div class="mbVersion">
               <a id = "a-4" href="/">Контакты</a>
           </div>
        </section>
    </main>
    <!--Меню заканчивается-->


    <!--Подвал-->
    <footer>
        
    </footer>
    <!--Подвал заканчивается-->
</body>
</html>
<script src="/js/resetWindow.js"></script>
<script src="js/checkForm.js"></script>
<script src="js/scroll.js"></script>
<script src ="/js/mobileVersion.js"></script>


