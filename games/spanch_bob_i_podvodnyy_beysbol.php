<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Спанч Боб и подводный бейсбол');

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
                <img src="http://spanchbob.cqp/images/img4.jpg" width="311" height="250" align="left"/>
                <h1>Спанч Боб и подводный бейсбол</h1><hr />
                <p>Скоро турнир по подводному бейсболу и пора наверное начать готовиться к нему. Эй, Спанч Боб, бери в руки биту и за дело, ты должен занять первое место на турнире! А ведь победителю достанутся самые лучшие ценности морского дна: жемчужины, кораллы и редкие красивые камни. А вы хотите, чтоб первое место занял Губка Боб? Тогда играйте в игре Спанч Боб и подводный бейсбол и помогите главному герою успешно пройти тренировку и занять место среди лидеров. Управление в игре осуществляется мышкой, перед вами будет два индикатора: один будет регулировать силу удара битой, второй - угол полета мяча. Сделайте все возможное, чтоб мяч от удара биты главного героя пролетел как можно большее расстояние и тогда он обязательно сможет победить. Спанч Боб и подводный бейсбол - игра, которая обязательно понравится вам и вашим друзьям.</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/spongebob-spring-training/springtraining-new.swf?wmodeOverride=direct&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-spring-training%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="725" height="378" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-spring-training/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="wmodeOverride=direct&amp;base=http://www.nick.com/games/data/spongebob/spongebob-spring-training/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
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