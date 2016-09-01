<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Подводные приключения');

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
                <img src="http://spanchbob.cqp/images/img16.jpg" width="311" height="250" align="left"/>
                <h1>Подводные приключения</h1><hr />
                <p>Для любителей игры "три в ряд", появилась новая аркада! На экране появляются герои из любимого мультфильмы Губка боб. Необходимо проявить внимательность и собрать три или более персонажей в один ряд. После чего, они исчезают и появляются новые. За правильно собранный ряд даются очки. Чем больше их наберешь, тем лучше. Игра состоит из нескольких уровней, каждый с повышенной сложностью. Увлекательная игра сопровождается красивыми картинками, с изображением подводного мира. Она отлично тренирует память и внимательность. Музыкальное сопровождение позволяет сделать испытания максимально веселыми и интересными!</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" id="FlashGameObject" data="http://games.myplayyard.com/content/games/63235-spongebob-underwater-fun.swf" width="710" height="600"><param name="allowScriptAccess" value="always"></object>
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