<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Приключения на вертолете');

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
    <title>Играть в игру Спанч Боб - Приключения на вертолете | онлайн игра Губка Боб - Приключения на вертолете | Играть онлайн в Губка боб приключения бесплатно</title>
    <meta name="description" content="И снова ваших мониторах появляется знаменитый персонаж Губка Боб. В этой версии, ему предстоит научиться управлять новым транспортным средством - вертолетом..." />
    <meta name="keywords" content="онлайн игра спнач боб приключения на вертолете, игра губка боб приключения на вертолете, играть губка боб приключения онлайн бесплатно без регистрации">

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
                <img src="http://igry-spanch-bob.ru/images/img31.jpg" alt="Играть в Губка Боб - Приключения на вертолете. Играть в игру Спанч Боб - Приключения на вертолете" width="311" height="250" align="left"/>
                <h1>Приключения на вертолете</h1><hr />
                <p>И снова ваших мониторах появляется знаменитый персонаж Губка Боб. В этой версии, ему предстоит научиться управлять новым транспортным средством - вертолетом. Ему необходимо пролететь по большому городу, преодолевая крыши здания и различные препятствия. Данная игра развивает ловкость и логическое мышление. Она состоит из нескольких уровней, с различной сложностью. В интереснейшую игру можно сыграть абсолютно бесплатно и без предварительной регистрации. Во время игры, следует также ловить бонусы. Управление осуществляется стрелочками на клавиатуре.</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" data="http://games.gahegames.com/1/Spongebob-Helicopter.swf?1" width="725" height="545"><param name="movie" value="http://games.gahegames.com/1/Spongebob-Helicopter.swf"><param name="quality" value="high"><param name="wmode" value="opaque"><param name="allowNetworking" value="internal"><param name="AllowScriptAccess" value="always"></object>
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