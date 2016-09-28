<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Путешествие Спанч Боба и его друзей');

$tops = top_games();
$all_games = homepage_games();


for ($i = 0; $i < 6; $i++) {
    while (true) {
        $rand_game = $all_games[rand(0, count($all_games))];
        if (empty($result)) {
            $result[] = $rand_game;
            break;
        } elseif ($result['title'] == $rand_game['title']) {
            continue;
        } else {
            $result[] = $rand_game;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="nofollow"/>
    <title>Играть в игру Спанч Боб - Путешествие Спанч Боба и его друзей | онлайн игра Путешествие Губки Боба и его друзей | Играть онлайн в Губка боб приключения бесплатно</title>
    <meta name="description" content="Ура! Губка Боб отправляется в путешествие. Он готов открыть себя для новых городов и стран. На красочном автобусе он может посетить множество интересных мест..." />
    <meta name="keywords" content="онлайн игра спнач боб путешествие на автобусе, онлайн игра губка боб автобусные приключения, играть губка боб приключения онлайн бесплатно">

    <link rel="stylesheet" type="text/css" href="/views/style.css" />
    <link rel="shortcut icon" href="http://igry-spanch-bob.ru/favicon2.2.png" type="image/x-icon">
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
        <a href="/"><img src="http://igry-spanch-bob.ru/images/6.png" /></a>
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
                    <p><a href="<?php echo "http://igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $top['title'])))).".php"; ?>"><img src="http://igry-spanch-bob.ru/images/<?php echo $top['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $top['title']; ?>. Губка боб игры онлайн" title="Игра Спанч Боб - <?php echo $top['title']; ?>" width="188" height="140" />
                            <?php echo $top['title']; ?></a>
                    </p>
                <?php endforeach; ?>
            </div>
            <div class="adv">
                <!-- Рекламный блок -->
            </div>
        </div>
        <!-- </noindex> -->
        <div class="main">
            <div class="one_game">
                <img src="http://igry-spanch-bob.ru/images/img21.jpg" alt="Играть в Губка Боб - Путешествие Спанч Боба и его друзей. Играть в игру Спанч Боб - Путешествие Спанч Боба и его друзей" width="311" height="250" align="left"/>
                <h1>Путешествие Спанч Боба и его друзей</h1><hr />
                <p>Ура! Губка Боб отправляется в путешествие. Он готов открыть себя для новых городов и стран. На красочном автобусе он может посетить множество интересных мест. Управляя транспортом, вы можете помочь ему решить эту задачу. Как всегда, на его пути встречаются препятствия, которые нужно преодолеть. Чем больше их получится объехать, тем больше начисляется очков. Такой игрой удобно управлять, при помощи девой кнопки мыши и стрелочек на клавиатуре. Очень красочная и интересная игра, состоит из нескольких уровней, проходя их, можно изучить множество новых мест.</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/sb_atlantis/SpongeBob_AtlantisSquarepants.swf?adloader=true&amp;wmodeOverride=direct&amp;gameName=Fun+Game+Title&amp;gameURI=%2Fgames%2Fdata%2Floaders%2Fhi_score_proxy_600x400_v8.swf&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fsb_atlantis%2F&amp;adfree=false" width="725" height="483" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/sb_atlantis/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;wmodeOverride=direct&amp;gameName=Fun Game Title&amp;gameURI=/games/data/loaders/hi_score_proxy_600x400_v8.swf&amp;base=http://www.nick.com/games/data/spongebob/sb_atlantis/&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="http://igry-spanch-bob.ru/images/<?php echo $item['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн" title="Игра Спанч Боб - <?php echo $item['title']; ?>" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
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