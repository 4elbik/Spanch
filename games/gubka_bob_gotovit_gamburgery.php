<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Губка Боб готовит гамбургеры');

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
    <title>Играть в игру Спанч Боб готовит крабсбургеры | онлайн игра Губка Боб - готовит крабсбургеры | Играть онлайн в Губка боб крабсбургеры бесплатно</title>
    <meta name="description" content="Ребятки, а вы знали, что у главного героя игры есть собственный цех по изготовлению вкусных гамбургеров и в нем Губка Боб проводит очень много времени. Но его злейший враг смог пробраться в этот цех..." />
    <meta name="keywords" content="играть губка боб готовит, губка боб готовит крабсбургеры, играть губка боб крабсбургеры">

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
                <img src="http://igry-spanch-bob.ru/images/img11.jpg" alt="Играть в Губка Боб - готовит гамбургеры. Играть в игру Спанч Боб - готовит гамбургеры" width="311" height="250" align="left"/>
                <h1>Губка Боб готовит гамбургеры</h1><hr />
                <p>Ребятки, а вы знали, что у главного героя игры есть собственный цех по изготовлению вкусных гамбургеров и в нем Губка Боб проводит очень много времени. Но его злейший враг смог пробраться в этот цех и пытается любыми силами остановить производство.
                    В игре Спанч Боб готовит гамбургеры вы должны будете наблюдать, контролировать и при необходимости включать оборудование цеха для того, чтоб не останавливалось приготовление гамбургеров. Как только противник будет выключать кнопки аппаратов, вы должны будете немедленно их включить. И как только вы сможете приготовить заданное количество гамбургеров, уровень будет пройден. Помогите главному герою, пройдите все уровни игры и спеките как можно больше лакомств, которые очень любит Губка Боб. Вперед, за дело друзья, медлить нельзя!  </p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/sb_krabo/krab-o-matic3000.swf?adloader=true&amp;gameName=Fun+Game+Title&amp;game_path=%2Fgames%2Fdata%2Fspongebob%2Fsb_krabo%2Fkrab-o-matic3000.swf&amp;gameURI=%2Fgames%2Fdata%2Fspongebob%2Fsb_krabo%2Fkrab-o-matic3000.swf&amp;adfree=false" width="725" height="604" id="game-play-container" style="visibility: visible;"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;gameName=Fun Game Title&amp;game_path=/games/data/spongebob/sb_krabo/krab-o-matic3000.swf&amp;gameURI=/games/data/spongebob/sb_krabo/krab-o-matic3000.swf&amp;adfree=false"></object>
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