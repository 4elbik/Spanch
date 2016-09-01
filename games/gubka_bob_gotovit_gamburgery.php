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
                <img src="http://spanchbob.cqp/images/img11.jpg" width="311" height="250" align="left"/>
                <h1>Губка Боб готовит гамбургеры</h1><hr />
                <p>Ребятки, а вы знали, что у главного героя игры есть собственный цех по изготовлению вкусных гамбургеров и в нем Губка Боб проводит очень много времени. Но его злейший враг смог пробраться в этот цех и пытается любыми силами остановить производство.
                    В игре Спанч Боб готовит гамбургеры вы должны будете наблюдать, контролировать и при необходимости включать оборудование цеха для того, чтоб не останавливалось приготовление гамбургеров. Как только противник будет выключать кнопки аппаратов, вы должны будете немедленно их включить. И как только вы сможете приготовить заданное количество гамбургеров, уровень будет пройден. Помогите главному герою, пройдите все уровни игры и спеките как можно больше лакомств, которые очень любит Губка Боб. Вперед, за дело друзья, медлить нельзя!  </p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/sb_krabo/krab-o-matic3000.swf?adloader=true&amp;gameName=Fun+Game+Title&amp;game_path=%2Fgames%2Fdata%2Fspongebob%2Fsb_krabo%2Fkrab-o-matic3000.swf&amp;gameURI=%2Fgames%2Fdata%2Fspongebob%2Fsb_krabo%2Fkrab-o-matic3000.swf&amp;adfree=false" width="725" height="604" id="game-play-container" style="visibility: visible;"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;gameName=Fun Game Title&amp;game_path=/games/data/spongebob/sb_krabo/krab-o-matic3000.swf&amp;gameURI=/games/data/spongebob/sb_krabo/krab-o-matic3000.swf&amp;adfree=false"></object>
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