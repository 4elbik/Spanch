<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Путешествия сквозь опасность');

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
    <title>Играть в игру Спанч Боб - какой боб, какие штаны? | онлайн игра Губка Боб - какой боб, какие штаны? | Играть онлайн Губка боб бесплатно</title>
    <meta name="description" content="В этой аркаде, он оказывается в большом городе и неизвестно кто такой боб и какие такие штаны. Ему снова поставлена задача добраться до определенного места.  Но, как всегда, сделать это ему мешают злые..." />
    <meta name="keywords" content="какой боб какие штаны, Спанч Боб какой боб какие штаны, играть онлайн бесплатно какой боб какие штаны">

    <link rel="stylesheet" type="text/css" href="/views/style.css" />
    <link rel="shortcut icon" href="http://igry-spanch-bob.ru/favicon2.2.png" type="image/x-icon">
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
        <a href="/"><img src="http://igry-spanch-bob.ru/images/6.png" /></a>
    </div>
    <div class="content">
        <!-- <noindex> -->
        <div class="left-panel">
            <div class="nav">
                <p>ЖАНРЫ</p><hr />
                <p><a href="/">ВСЕ ИГРЫ</a></p>
            </div>
            <div class="top5">
                <p>ПОПУЛЯРНЫЕ ИГРЫ</p><hr />
                <?php foreach($tops as $top): ?>
                    <p><a href="<?php echo "http://igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $top['title'])))).".php"; ?>"><img src="<?php echo $top['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $top['title']; ?>. Губка боб игры онлайн" width="188" height="140" />
                            <?php echo $top['title']; ?></a>
                    </p>
                <?php endforeach; ?>
            </div>
            <div class="adv">
                <!-- Рекламный блок -->
            </div>
        </div>
        <!-- </noindex> -->
        <div class="main">
            <div class="one_game">
                <img src="http://igry-spanch-bob.ru/images/img28.jpg" alt="Играть в Губка Боб - Путешествия сквозь опасность. Играть в игру Спанч Боб - Путешествия сквозь опасность" width="311" height="250" align="left"/>
                <h1>Путешествия сквозь опасность</h1><hr />
                <p>Главный персонаж известного детского мультика может теперь не только преодолевать различные препятствия, но и развлекаться. В этой аркаде, он оказывается в большом городе и неизвестно кто такой боб и какие такие штаны. Ему снова поставлена задача добраться до определенного места.  Но, как всегда, сделать это ему мешают злые недоброжелатели! В этой версии ему предстоит прыгать по веткам и сражаться со злодеями, которые ещё не знают кто такой боб и что за штаны на нем надеты. На экране появляется индикатор жизни. Его уровень снижается при столкновении с недоброжелателем. Игра состоит из нескольких уровней и на все предоставлено три жизни. </p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/spongebob-whobob/main.swf?adloader=true&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-squarepants%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="725" height="483" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-squarepants/"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;base=http://www.nick.com/games/data/spongebob/spongebob-squarepants/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="<?php echo $item['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
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