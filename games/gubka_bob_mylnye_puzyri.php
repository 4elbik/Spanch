<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Губка Боб мыльные пузыри');

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
    <title>Игра Губка боб мыльные пузыри | онлайн игра Спанч Боб - мыльные пузыри | Играть онлайн Губка боб бесплатно</title>
    <meta name="description" content="Новая версия игры с популярным героем Губка Боб квадратные штаны отлично тренирует ловкость. В этот раз герой представлен в солидном виде, с прекрасным галстуком на шее. В комнате появляется множество мыльных пузырей..." />
    <meta name="keywords" content="губка боб мыльные пузыри, игра губка боб мыльные пузыри, играть онлайн бесплатно губка боб мыльные пузыри">

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
        <!-- <noindex> -->
        <div class="left-panel">
            <div class="nav">
                <p>ЖАНРЫ</p><hr />
                <p><a href="/">ВСЕ ИГРЫ</a></p>
            </div>
            <div class="top5">
                <p>ПОПУЛЯРНЫЕ ИГРЫ</p><hr />
                <?php foreach($tops as $top): ?>
                    <p><a href="<?php echo "http://www.igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $top['title'])))).".php"; ?>"><img src="http://www.igry-spanch-bob.ru/images/<?php echo $top['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $top['title']; ?>. Губка боб игры онлайн" title="Игра Спанч Боб - <?php echo $top['title']; ?>" width="188" height="140" />
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
                <img src="http://www.igry-spanch-bob.ru/images/img24.jpg" alt="Играть в Губка Боб - мыльные пузыри. Играть в игру Спанч Боб - мыльные пузыри" width="311" height="250" align="left"/>
                <h1>Губка Боб мыльные пузыри</h1><hr />
                <p>Новая версия игры с популярным героем Губка Боб квадратные штаны отлично тренирует ловкость. В этот раз герой представлен в солидном виде, с прекрасным галстуком на шее. В комнате появляется множество мыльных пузырей. Цель игры - это лопнуть как можно за все испытания. Это осуществляется при помощи нажатия левой кнопки мыши. Игра состоит из нескольких этапов, с повышенным уровнем сложности. С каждым разом появляется одновременно больше мыльных пузырей и они набирают максимальную скорость. Необходимо развивать ловкость и скорость, стараясь лопнуть, как можно больше пузырей.  Это игра отлично воздействует на внимательность.</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/sb_bubblebust/bubblebust18.swf?adloader=true&amp;wmodeOverride=direct&amp;data=%2Fgames%2Fdata%2Fgame_bps.jhtml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fsb_bubblebust%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="725" height="483" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/sb_bubblebust/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;wmodeOverride=direct&amp;data=/games/data/game_bps.jhtml&amp;base=http://www.nick.com/games/data/spongebob/sb_bubblebust/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
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