<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Пираты');

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
                <img src="http://spanchbob.cqp/images/img14.jpg" width="311" height="250" align="left"/>
                <h1>Пираты</h1><hr />
                <p>Губка Боб пираты - это одна из лучших игр со Спанч Бобом и играть в нее вам обязательно понравится, так как вас ждет непростая битва на просторах морей и океанов. Играйте хитро и  расставляйте свои боевые корабли так, чтоб их не мог найти противник. В качестве подводных мин в игре Губка Боб пираты будут использоваться медузы и количество их строго ограничено.
                    Для того, чтоб начать - нужно совершить одно действие - нажать кнопку старт, выбрать цвет медуз для атаки, расставить свои корабли на игровом поле и начать эту непростую баталию. Победителем станет тот игрок, который первым сможет отыскать все корабли противника на игровом поле и уничтожить их. Игра вам обязательно понравится и для того, чтоб вам было интересней, предложите сразиться лучшего друга и тогда вы узнаете, кто хитрей и кто сильней в этом пиратском мире. Губка Боб пираты вам обязательно понравится!</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" data="http://games.gahegames.com/1/Sponge-Bob-Square-Pants-Spongeseeker.swf?1" width="725" height="484"><param name="movie" value="http://games.gahegames.com/1/Sponge-Bob-Square-Pants-Spongeseeker.swf?1"><param name="quality" value="high"><param name="wmode" value="opaque"><param name="allowNetworking" value="internal"><param name="AllowScriptAccess" value="always"><!--<![endif]--><!--[if !IE]>--></object>
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