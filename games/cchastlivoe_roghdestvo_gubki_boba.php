<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Cчастливое рождество Губки Боба');

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
    <link rel="stylesheet" type="text/css" href="/views/style.css" />
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
                <img src="http://spanchbob.cqp/images/img18.jpg" width="311" height="250" align="left"/>
                <h1>Cчастливое рождество Губки Боба</h1><hr />
                <p>Перед наступлением нового года, хочется подарить себе массу положительных впечатлений. Это может сделать удивительная рождественская версия игры про Губку Боб. С первой секунды аркады появляется веселая мелодия и красочное сопровождение. Губке Бобу и его друзьям приходится находиться на открытой местности и ловить новогодние подарки. За каждую пойманную начисляются накопительные очки. Цель игры - набрать как можно больше очков и пройти испытания разного уровня сложности. На это персонажем из любимого детского мультфильма дается, всего лишь, три жизни. Следует проявиться максимальную ловкость!</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/spongebob-its-a-spongebob-christmas/main-flash.swf?adloader=true&amp;wmodeOverride=direct&amp;config=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-its-a-spongebob-christmas%2Fxml%2Fconfig.xml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-its-a-spongebob-christmas%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="560" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-its-a-spongebob-christmas/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;wmodeOverride=direct&amp;config=http://www.nick.com/games/data/spongebob/spongebob-its-a-spongebob-christmas/xml/config.xml&amp;base=http://www.nick.com/games/data/spongebob/spongebob-its-a-spongebob-christmas/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://spanchbob.cqp/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="<?php echo $item['img']; ?>" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
                        <p><?php echo $item['little_description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright &copy; 2016</p>
    </div>
</div>
</body>
</html>