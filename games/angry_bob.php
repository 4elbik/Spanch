<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Angry Боб');

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
    <title>Играть в игру Спанч боб - Angry Боб онлайн | онлайн игра Angry Боб</title>
    <meta name="description" content="Это игра превосходно тренирует меткость. На экране появляется большой кустарник. На нем сидит персонаж с рогаткой. Цель игры - это правильно прицелиться и сбить орехи..." />
    <meta name="keywords" content="игра Спанч Боб онлайн - Angry Боб, играть в игры Губка Боб онлайн бесплатно">

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
        <div class="main">
            <div class="one_game" style="width: 925px;">
                <img src="http://igry-spanch-bob.ru/images/img23.jpg" alt="Играть в Губка Боб - Angry Боб. Играть в игру Спанч Боб - Angry Боб" width="311" height="250" align="left"/>
                <h1>Angry Боб</h1><hr />
                <p>Это игра превосходно тренирует меткость. На экране появляется большой кустарник. На нем сидит персонаж с рогаткой. Цель игры - это правильно прицелиться и сбить орехи. На один этап дается всего 5 камней, используя их, необходимо стараться очистить кустарник. Игра состоит из нескольких этапов, с каждым разом она становится сложнее и на дереве появляются новые предметы, в которые необходимо кидать камни несколько раз. Будьте внимательны! На каждый этап дается всего три жизни. Если вы не успеете сбить все предметы, то придется вновь проходить игру с первого уровня.</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/spongebob-sandy-shrubbery-2/spongebob_shrubbery_shakedown_2.swf?adloader=true&amp;wmodeOverride=direct&amp;config=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-sandy-shrubbery-2%2Fassets%2Fbootstrap%2Fconfig%2Fconfig.xml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-sandy-shrubbery-2%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="560" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-sandy-shrubbery-2/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;wmodeOverride=direct&amp;config=http://www.nick.com/games/data/spongebob/spongebob-sandy-shrubbery-2/assets/bootstrap/config/config.xml&amp;base=http://www.nick.com/games/data/spongebob/spongebob-sandy-shrubbery-2/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
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