<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Бейсбол');

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
            <div class="gubka">
                <!-- Губка -->
            </div>
        </div>
        <div class="main">
            <div class="one_game">
                <img src="http://spanchbob.cqp/images/img15.jpg" width="311" height="250" align="left"/>
                <h1>Бейсбол</h1><hr />
                <p>И вот он, известный во всем мире Губка Боб, на спортивной арене. Главный герой игры решил устроить настоящие соревнования по бейсболу и пригласил для этого лучших друзей: Патрика Стар и Сэнди Чикс. Немного потренировавшись, спортсмены взяли в руки свои биты с мячиками и вышли на игровое поле, а ведь спортивный инвентарь у них довольно необычный.
                    Для того, чтоб начать игру, выбирайте того персонажа, с которым захотите играть и сразиться против своих противников. Поочередно вы будете играть питчером и кетчером, подавать мяч и отбивать его. Ваша основная задача подать мячик так, чтоб его не мог отбить противник. И наоборот, если подача будет на вас, то отбить как можно точней и сильней. Прикол игры Спанч Боб бейсбол заключается в том, что у игроков будут необычные биты и мячики, и играть в эту игру будет намного интересней. Не теряйте время, разминайтесь, и вперед, за победами!</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/sb_slammin/main.swf?adloader=true&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fsb_slammin%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="725" height="483" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/sb_slammin/"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;base=http://www.nick.com/games/data/spongebob/sb_slammin/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
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