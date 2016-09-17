<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Дайвер');

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
        <div class="left-panel">
            <div class="nav">
                <p>ЖАНРЫ</p><hr />
                <p><a href="/">ВСЕ ИГРЫ</a></p>
            </div>
            <div class="top5">
                <p>ПОПУЛЯРНЫЕ ИГРЫ</p><hr />
                <?php foreach($tops as $top): ?>
                    <p><a href="<?php echo "http://spanchbob.cqp/games/".strtolower(translit(implode('_', explode(' ', $top['title'])))).".php"; ?>"><img src="<?php echo $top['img']; ?>" width="188" height="140" />
                            <?php echo $top['title']; ?></a>
                    </p>
                <?php endforeach; ?>
            </div>
            <div class="adv">
                <!-- Рекламный блок -->
            </div>
        </div>
        <div class="main">
            <div class="one_game">
                <img src="http://spanchbob.cqp/images/img12.jpg" width="311" height="250" align="left"/>
                <h1>Дайвер</h1><hr />
                <p>Этой отважный герой не может сидеть на месте без дела и в этой игре он решил отправиться на море для того, чтоб собрать все лишние предметы, которые могут плавать в воде. Но сделать это непросто, ведь ему придется много плавать и нырять в воду и вы должны помочь Губке Бобу выполнить такую миссию.
                    В начале каждого уровня игры Спанч Боб дайвер персонаж будет стоять на пике горы и готовиться к прыжку в воду. Вам необходимо будет рассчитать траекторию его полета и силу так, чтоб с первого раза поймать плавающий предмет в воде. Немного потренируйтесь и приступайте к прохождению всех уровней игры. Миссия Спанч Боба очень хорошая, он борется за чистоту экологии и морской воды и именно поэтому данная игра не только интересная, но и полезная для каждого ребенка.  </p><hr />
                <div class="game_window">
                    <embed width="725" height="600" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://static.sohagame.net/0814/spongebob-sea-diver.swf" name="a2fgameid" base="http://static.sohagame.net/0814/" type="application/x-shockwave-flash">
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