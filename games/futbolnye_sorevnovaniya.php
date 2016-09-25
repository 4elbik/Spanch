<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Футбольные соревнования');

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
    <title>Играть в игру Губка Боб - Американский футбол | онлайн игра Губка Боб - звезды футбола | Играть футбол Губка боб</title>
    <meta name="description" content="Любители футбольных звезд из персонажей Nickelodeon, могут попробовать свои силы на компьютерном экране. На зеленом поле встречаются множество команд..." />
    <meta name="keywords" content="футбол играть губка боб, губка боб американский футбол, губка боб звезды футбола, звездный футбол спанч боб">

    <link rel="stylesheet" type="text/css" href="/views/style.css" />
    <link rel="shortcut icon" href="http://spanchbob.cqp/favicon2.2.png" type="image/x-icon">
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
        <a href="/"><img src="http://spanchbob.cqp/images/5.png" /></a>
    </div>
    <div class="content">
        <div class="main">
            <div class="one_game" style="width: 925px;">
                <img src="http://spanchbob.cqp/images/img32.jpg" alt="Играть в Губка Боб - Американский футбол. Играть в игру Спанч Боб - Американский футбол" width="311" height="250" align="left"/>
                <h1>Американский футбол</h1><hr />
                <p>Любители футбольных звезд из персонажей Nickelodeon, могут попробовать свои силы на компьютерном экране. На зеленом поле встречаются множество команд. Выбираешь своих <strong> любимых звёзд футбола </strong>, в их числе и наш любимый герой Губка Боб квадратные штаны. В американском футболе управление осуществляется одним из персонажей. Перемещать футбольных звёзд можно стрелочками на клавиатуре. В игре содержится вся атмосфера игры американского футбола. В ней наложено веселое музыкальное сопровождение, аплодисменты и возгласы зрителей. Цель игры - забросить мяч в ворота команды соперника. Как и в настоящем американском футболе, в любую секунду его может выхватить игрок из другой команды. Это очень увлекательная игра с участием Спанч Боба, позволяющая развивать логику, ловкость и скорость.</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/nickelodeon/nickelodeon-football-stars/main-flash.swf?wmodeOverride=direct&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fnickelodeon%2Fnickelodeon-football-stars%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="560" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/nickelodeon/nickelodeon-football-stars/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="wmodeOverride=direct&amp;base=http://www.nick.com/games/data/nickelodeon/nickelodeon-football-stars/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://spanchbob.cqp/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="<?php echo $item['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
                        <p><?php echo $item['little_description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- </noindex> -->
        </div>
    </div>
    <!-- <noindex> -->
    <div class="footer">
        <p>Copyright &copy; 2016</p>
    </div>
    <!-- </noindex> -->
</div>
</body>
</html>