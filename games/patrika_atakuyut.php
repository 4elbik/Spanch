<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';


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
                <img src="http://spanchbob.cqp/images/img1.jpg" width="311" height="250" align="left"/>
                <h1>Патрика Атакуют</h1><hr />
                <p>Ну никак Патрик не может справится с нашествием этих страшных, серых и надоедливых улиток. Как бы он ни старался от них избавиться, их численность увеличивается. Теперь всё больше и больше становится этих злых улиток. Вы должны помочь главному герою очистить дом от этих слизистых насекомых. Но сделать это будет достаточно трудно, так как с каждым новым уровнем их будет все больше и больше, а места чтоб укрыться совсем мало. В вашем распоряжении будет специальный раствор, который усыпляет улиток. Вот именно его и надо будет использовать для очистки дома Патрика. Но будьте осторожны и внимательны, так как не всех улиток усыпляет такой раствор. Те, которые с черным панцирем, будут засыпать лишь на несколько секунд. Вы обязательно должны расправится со всеми улитками, которые будут бегать по дому главного героя. Играйте в игру Атака улиток на Патрика и получайте массу удовольствия от такой необычной, но очень увлекательной игры.  </p><hr />
                <div class="game_window">
                    <iframe src="http://www.nick.com/games/data/spongebob/spongebob-squarepants-snail-a-salt/spongebob_virtual_boy_loader.swf" width="725" height="377"></iframe>
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