<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Каменный замок');

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
    <title>Играть в игру Спанч Боб Каменный замок | онлайн игра Губка Боб - Каменный замок | Играть онлайн в Губка боб приключения бесплатно</title>
    <meta name="description" content="В этой версии игры можно увидеть главного героя детского мультфильма в новом обличии. На нем одет защитный шлем, а в руке большой меч. Все это необходимо для того, чтобы попасть в каменный замок. Ему предстоит пройти долгий путь..." />
    <meta name="keywords" content="Играть в игру Спанч Боб Каменный замок, онлайн игра Губка Боб - Каменный замок, играть губка боб приключения онлайн бесплатно">

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
        <div class="main">
            <div class="one_game" style="width: 925px;">
                <img src="http://igry-spanch-bob.ru/images/img22.jpg" alt="Играть в Губка Боб - Каменный замок. Играть в игру Спанч Боб - Каменный замок" width="311" height="250" align="left"/>
                <h1>Каменный замок</h1><hr />
                <p>В этой версии игры можно увидеть главного героя детского мультфильма в новом обличии. На нем одет защитный шлем, а в руке большой меч. Все это необходимо для того, чтобы попасть в каменный замок. Ему предстоит пройти долгий путь. На дороге встречаются каменные стены и охранники. Преодолеть он это может высоко прыгая и махая мечом. Управление осуществляется при помощи стрелок на клавиатуре. Игра очень интересная и красивая, присутствует красочное изображение полей, рек, цветов и много другого. Она сопровождается музыкальным сопровождением, благодаря которому можно почувствовать себя настоящим героем.</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/nick-assets/games/swfs/wrapper_10.swf?gameSwf=/games/data/spongebob/spongebob-castle-challenge-the-storm/spongebob_sponge_charge_loader.swf&amp;gameSwfProtected=true&amp;?adloader=true&amp;config=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-castle-challenge-the-storm%2Fxml%2Fconfig.xml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-castle-challenge-the-storm%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="500" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-castle-challenge-the-storm/"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;config=http://www.nick.com/games/data/spongebob/spongebob-castle-challenge-the-storm/xml/config.xml&amp;base=http://www.nick.com/games/data/spongebob/spongebob-castle-challenge-the-storm/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="http://igry-spanch-bob.ru/images/<?php echo $item['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн" title="Игра Спанч Боб - <?php echo $item['title']; ?>" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
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