<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Пираты');

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
    <title>Играть в игру Спанч Боб - Пираты | онлайн игра Губка Боб - Морской бой | Играть онлайн в Губка боб логические бесплатно</title>
    <meta name="description" content="Губка Боб пираты - это одна из лучших игр со Спанч Бобом и играть в нее вам обязательно понравится, так как вас ждет непростая битва на просторах морей и океанов..." />
    <meta name="keywords" content="губка боб морской бой, онлайн игра губка боб пираты, играть губка боб логические онлайн бесплатно">

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
                <img src="http://www.igry-spanch-bob.ru/images/img14.jpg" alt="Играть в Губка Боб - Пираты. Играть в игру Спанч Боб - Пираты" width="311" height="250" align="left"/>
                <h1>Пираты</h1><hr />
                <p>Губка Боб пираты - это одна из лучших игр со Спанч Бобом и играть в нее вам обязательно понравится, так как вас ждет непростая битва на просторах морей и океанов. Играйте хитро и  расставляйте свои боевые корабли так, чтоб их не мог найти противник. В качестве подводных мин в игре Губка Боб пираты будут использоваться медузы и количество их строго ограничено.
                    Для того, чтоб начать - нужно совершить одно действие - нажать кнопку старт, выбрать цвет медуз для атаки, расставить свои корабли на игровом поле и начать эту непростую баталию. Победителем станет тот игрок, который первым сможет отыскать все корабли противника на игровом поле и уничтожить их. Игра вам обязательно понравится и для того, чтоб вам было интересней, предложите сразиться лучшего друга и тогда вы узнаете, кто хитрей и кто сильней в этом пиратском мире. Губка Боб пираты вам обязательно понравится!</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" data="http://games.gahegames.com/1/Sponge-Bob-Square-Pants-Spongeseeker.swf?1" width="725" height="484"><param name="movie" value="http://games.gahegames.com/1/Sponge-Bob-Square-Pants-Spongeseeker.swf?1"><param name="quality" value="high"><param name="wmode" value="opaque"><param name="allowNetworking" value="internal"><param name="AllowScriptAccess" value="always"><!--<![endif]--><!--[if !IE]>--></object>
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