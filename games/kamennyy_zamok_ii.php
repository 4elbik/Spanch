<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Каменный замок II');

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
    <title>Играть в игру Спанч Боб Каменный замок 2 | онлайн игра Губка Боб - Каменный замок 2 | Играть онлайн в Губка боб приключения бесплатно</title>
    <meta name="description" content="В каждой игре Губке Бобу предстоит пройти сложнейшие испытание. Не исключением стала и эта версия. Главному герою необходимо попасть в огромный замок, но это не так просто сделать..." />
    <meta name="keywords" content="Играть в игру Спанч Боб Каменный замок 2, онлайн игра Губка Боб - Каменный замок 2, играть губка боб приключения онлайн бесплатно">

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
                <img src="http://igry-spanch-bob.ru/images/img17.jpg" alt="Играть в Губка Боб - Каменный замок II. Играть в игру Спанч Боб - Каменный замок II" width="311" height="250" align="left"/>
                <h1>Каменный замок II</h1><hr />
                <p>В каждой игре Губке Бобу предстоит пройти сложнейшие испытание. Не исключением стала и эта версия. Главному герою необходимо попасть в огромный замок, но это не так просто сделать, перед ним стоит мощная дверь. На пути к ней появляются бдительные охранники замка, которые не позволяют пройти персонажу в замок. Губке бобу предстоит избавиться от назойливых охранников и добраться до вершины замка. В этом ему поможет защитный шлем, хитрость и сила. Игра невероятно увлекательная и проста в управлении. С ней может справиться маленький ребенок, но и взрослому будет интересно пройти испытания. Темные картинки и характерное музыкальное сопровождение позволяют передать всю насыщенность игры.</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/nick-assets/games/swfs/wrapper_10.swf?gameSwf=/games/data/spongebob/spongebob-castle-challenge-the-escape/spongebob_warsnail_loader.swf&amp;gameSwfProtected=true&amp;?adloader=true&amp;config=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-castle-challenge-the-escape%2Fxml%2Fconfig.xml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-castle-challenge-the-escape%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="500" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-castle-challenge-the-escape/"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;config=http://www.nick.com/games/data/spongebob/spongebob-castle-challenge-the-escape/xml/config.xml&amp;base=http://www.nick.com/games/data/spongebob/spongebob-castle-challenge-the-escape/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="http://igry-spanch-bob.ru/images/<?php echo $item['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
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