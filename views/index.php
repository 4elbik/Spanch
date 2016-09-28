<?php
require_once __DIR__ . '/../functions/translit.php';
require_once __DIR__ . '/../functions/DB.php';


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Игры Спанч Боб | Игры Боб | Играть Губка Боб | Флеш игры Губка Боб</title>
    <link rel="stylesheet" href="/views/style.css" type="text/css" />
    <link rel="shortcut icon" href="http://igry-spanch-bob.ru/favicon2.2.png" type="image/x-icon">
</head>
<body>
<div id="background">
    <div class="logo">
        <a href="/"><img src="http://igry-spanch-bob.ru/images/6.png" alt="Игры Спанч боб. Переход на главную страницу"/></a>
    </div>
    <div class="content">
        <!-- <noindex> -->
        <div class="left-panel">
            <div class="nav">
                <p>ЖАНРЫ</p><hr />
                <p><a href="/">ВСЕ ИГРЫ</a></p>
            </div>
            <div class="top5">
                <p>ПОПУЛЯРНЫЕ ИГРЫ</p><hr />
                <?php foreach($tops as $top): ?>
                    <p><a href="<?php echo "http://igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $top['title'])))).".php"; ?>"><img src="http://igry-spanch-bob.ru/images/<?php echo $top['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $top['title']; ?>. Губка боб игры онлайн" title="Игра Спанч боб - <?php echo $top['title']; ?>" width="188" height="140" />
                            <?php echo $top['title']; ?></a>
                    </p>
                <?php endforeach; ?>
            </div>
            <div class="adv">
                <!-- Рекламный блок -->
            </div>
            <div class="gubka">
                <!-- Губка -->
            </div>
        </div>
        <!-- </noindex> -->
        <div class="main">
            <div class="popular_games">
                <a href="http://igry-spanch-bob.ru/games/spanch_bob_bolshie_priklyucheniya.php">
                    <img src="http://igry-spanch-bob.ru/images/popular_game_1.jpg" alt="Спанч боб Большие приключения. Губка боб - Большие приключения играть" title="Игра Спанч боб - Большое приключение" width="593" />
                    <div class="popular_games_text">
                        <strong>СПАНЧ БОБ<hr /> <span class="next_str">"БОЛЬШОЕ ПРИКЛЮЧЕНИЕ"</span></strong>
                    </div>
                </a>
            </div>
            <div class="header_description">
                <p>Приветствуем Вас, любители бесплатных онлайн игр! Всеобщий любимец Спанч Боб снова с вами и готов к новым приключениям!<br />
                Не для кого не секрет, что Губка Боб Квадратные Штаны очень любит попадать в разного рода неприятности и зачастую с ним оказывается его лучший друг – Патрик. Оба героя, хоть и не слишком умные, они обязательно найдут выход из любых неприятностей.. Конечно, если ты поможешь им, ведь у тебя же больше ума?...</p>
                <hr />
            </div>
            <?php foreach ($items as $item): ?>
            <div class="game">
                <a href="<?php echo "http://igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="http://igry-spanch-bob.ru/images/<?php echo $item['img']; ?>" width="188" height="140" align="left" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн"  title="Игра Спанч боб - <?php echo $item['title']; ?>" /><h2><?php echo $item['title']; ?></h2></a><hr />
                <p><?php echo $item['little_description']; ?></p>
            </div>
            <?php endforeach; ?>
            <div class="footer_description">
                <hr />
                Конечно, может именно недостаток ума Спанч Боба и привлекает нас в нём. Ведь без этого и не было бы таких интересных приключений. Каждая прогулка Спанч Боба всегда превращается в головокружительные истории, и зачастую эти истории происходят с самыми лучшими друзьями по мнению Губки – Патриком и Сквидвардом. Множество самых-самых разных игр, и есть на нашем сайте, посвященному нашему главному герою! Различные игры со Спанч Бобом на нашем сайте позволят весело провести время. Большой выбор и разнообразие каждой из игр, ну и просто близже познакомиться с Губкой Бобом, позволят выбрать тебе любимую игру и забавно развлечься! Здесь можно найти каждого из героев этого любимого мультика, Патрика Стар, Сквидварда Тентикалса, Сенди Чикс, улитку Гери, Мистера Крабса и его злейшего врага - Шелдона Планктона, и многих-многих других. Все с нетерпением жаждут встречи с тобой, чтобы ты поиграл с ними! Для любителей больших игр рекомендуем поиграть в самую интересную игру – Большие приключения Спанч Боба, расположенную в самом верху страницы. Она очень увлекательная и каждому любителю Губки Боба обязательно понравится. Приятных игр, любитель серий Губки Боба Квадратных штанов!
            </div>
        </div>
    </div>
    <div class="footer">
        <!--LiveInternet counter--><script type="text/javascript"><!--
            document.write("<a href='//www.liveinternet.ru/click' "+
                "target=_blank><img src='//counter.yadro.ru/hit?t15.6;r"+
                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                ";"+Math.random()+
                "' alt='' title='LiveInternet: показано число просмотров за 24"+
                " часа, посетителей за 24 часа и за сегодня' "+
                "border='0' width='88' height='31'><\/a>")
            //--></script><!--/LiveInternet-->

        <p>Copyright &copy; 2016</p>
    </div>
</div>
</body>
</html>