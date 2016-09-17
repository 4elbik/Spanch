<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Магические зелья');

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
                <img src="http://spanchbob.cqp/images/img6.jpg" width="311" height="250" align="left"/>
                <h1>Магические зелья</h1><hr />
                <p>Вот  это да! Оказывается, Губка Боб и его друг Патрик умеют готовить магические зелья и в данной игре они решили устроить настоящую колдовскую вечеринку. Приготовили огромный чан, наполнили его водой и собрали множество ингредиентов для своего волшебства. Хотите  узнать как все будет готовиться? Если да, тогда играйте в игру Спанч Боб и Патрик готовят магические зелья.
                    Ваша основная задача будет заключаться в том, чтоб помогать друзьям наполнять чан зельями. Перед вами будет показан список и на полке слева будут лежать множество зелий. Если вы сделаете правильный выбор, зелье будет приготовлено правильно и Спанч Боб с Патриком будут праздновать свою магическую вечеринку. Но даже если вы ошибетесь, не отчаивайтесь, вам будут даны подсказки.
                    Стоит только начать игру Спанч Боб и Патрик готовят магические зелья и она сразу же вам понравится. А если захотите, пригласите в гости лучших друзей и колдовать вместе с ними будет намного интересней. Магической вечеринке быть! </p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/spongebob-tasty/tasty_pastry_party.swf?adloader=true&amp;wmodeOverride=Direct&amp;config=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-tasty%2Fconfig.xml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-tasty%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="560" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-tasty/"><param name="wmode" value="Direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;wmodeOverride=Direct&amp;config=http://www.nick.com/games/data/spongebob/spongebob-tasty/config.xml&amp;base=http://www.nick.com/games/data/spongebob/spongebob-tasty/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://spanchbob.cqp/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="<?php echo $item['img']; ?>" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
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