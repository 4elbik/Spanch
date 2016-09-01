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
    <link rel="stylesheet" type="text/css" href="/views/style.css" />
</head>
<body>
<div id="background">
    <div class="logo">
        <a href="/"><img src="http://spanchbob.cqp/images/5.png" /></a>
    </div>
    <div class="content">
        <div class="nav">
            <p>ЖАНРЫ</p><hr />
            <p><a href="/">ВСЕ ИГРЫ</a></p>
        </div>
        <div class="top5">
            <p>ПОПУЛЯРНЫЕ ИГРЫ</p><hr />
            <?php foreach ($tops as $top): ?>
                <p><a href="<?php echo "http://spanchbob.cqp/games/".strtolower(translit(implode('_', explode(' ', $top['title'])))).".php"; ?>"><img src="<?php echo $top['img']; ?>" width="188" height="140" />
                        <?php echo $top['title']; ?></a>
                </p>
            <?php endforeach; ?>
        </div>
        <div class="adv">
            <!-- Рекламный блок -->
        </div>
        <div class="main">
            <div class="one_game">
                <img src="http://spanchbob.cqp/images/img31.jpg" width="311" height="250" align="left"/>
                <h1>Приключения на вертолете</h1><hr />
                <p>И снова ваших мониторах появляется знаменитый персонаж Губка Боб. В этой версии, ему предстоит научиться управлять новым транспортным средством - вертолетом. Ему необходимо пролететь по большому городу, преодолевая крыши здания и различные препятствия. Данная игра развивает ловкость и логическое мышление. Она состоит из нескольких уровней, с различной сложностью. В интереснейшую игру можно сыграть абсолютно бесплатно и без предварительной регистрации. Во время игры, следует также ловить бонусы. Управление осуществляется стрелочками на клавиатуре.</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" data="http://games.gahegames.com/1/Spongebob-Helicopter.swf?1" width="725" height="545"><param name="movie" value="http://games.gahegames.com/1/Spongebob-Helicopter.swf"><param name="quality" value="high"><param name="wmode" value="opaque"><param name="allowNetworking" value="internal"><param name="AllowScriptAccess" value="always"></object>
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