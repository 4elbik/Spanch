<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Шоппинг вместе с Губкой');

$tops = top_games();
$all_games = homepage_games();

$rand_game = $all_games[rand(0, count($all_games)-1)];
if (empty($result)) {
    $result[] = $rand_game;
}
while (true) {
    if (count($result) > 5) break;
    $rand_game = $all_games[rand(0, count($all_games)-1)];
    if (!in_array($rand_game, $result, true)) {
        $result[] = $rand_game;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="nofollow"/>
    <title>Играть в игру Спанч Боб - Шоппинг вместе с Губкой | онлайн игра Губка Боб - Шоппинг вместе с Губкой | Играть онлайн в Губка боб бесплатно</title>
    <meta name="description" content="Игра создана по жанру интересного детского мультика Губка Боб квадратные штаны. На этот раз главному герою придется заняться шопингом. На его выбор можно отправиться в один из четырех магазинов..." />
    <meta name="keywords" content="онлайн игра спнач боб шоппинг, онлайн игра губка боб шоппинг, играть губка боб онлайн бесплатно">

    <link rel="stylesheet" type="text/css" href="/views/style.css" />
    <link rel="shortcut icon" href="http://www.igry-spanch-bob.ru/favicon2.2.png" type="image/x-icon">
    <style type="text/css">
        .game {
            margin-top: 0px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div id="background">
    <div class="logo">
        <a href="/"><img src="http://www.igry-spanch-bob.ru/images/6.png" /></a>
    </div>
    <div class="content">
        <div class="main">
            <div class="one_game" style="width: 925px;">
                <img src="http://www.igry-spanch-bob.ru/images/img19.jpg" alt="Играть в Губка Боб - Шоппинг. Играть в игру Спанч Боб - Шоппинг" width="311" height="250" align="left"/>
                <h1>Шоппинг вместе с Губкой</h1><hr />
                <p>Игра создана по жанру интересного детского мультика Губка Боб квадратные штаны. На этот раз главному герою придется заняться шопингом. На его выбор можно отправиться в один из четырех магазинов. Там ему предстоит общаться с людьми и делать множество покупок. Управление игрой осуществляется при помощи кнопок мыши. На первом этапе прохождение испытания предоставляется курс обучения. На экране будут появляться стрелочки и надписи, которые подскажут, какую задачу необходимо выполнить. Насладиться этой увлекательной игрой можно и вместе с другом! Продайте всё, что требуется каждому покупаетлю, и найдите подход к каждому из них! Зарабатывай, зарабатывай, ну и конечно, зарабатывай! :)</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/spongebob-squarepants-whale-of-a-sale/WhaleOfaSale.swf?adloader=true&amp;config=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-squarepants-whale-of-a-sale%2Fxml%2Fconfig.xml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-squarepants-whale-of-a-sale%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="500" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-squarepants-whale-of-a-sale/"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;config=http://www.nick.com/games/data/spongebob/spongebob-squarepants-whale-of-a-sale/xml/config.xml&amp;base=http://www.nick.com/games/data/spongebob/spongebob-squarepants-whale-of-a-sale/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://www.igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="http://www.igry-spanch-bob.ru/images/<?php echo $item['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн" title="Игра Спанч Боб - <?php echo $item['title']; ?>" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
                        <p><?php echo $item['little_description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- </noindex> -->
        </div>
    </div>
    <!-- <noindex> -->
    <div class="footer"><!--LiveInternet counter--><script type="text/javascript"><!--
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
        <p style="margin-top: 3px;">Copyright &copy; 2016</p>
    </div>
    <!-- </noindex> -->
</div>
</body>
</html>