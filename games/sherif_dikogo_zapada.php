<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Шериф Дикого Запада');

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
    <title>Играть в игру Спанч Боб - Шериф Дикого Запада | онлайн игра Губка Боб - Шериф Дикого Запада | Играть онлайн в Губка боб приключения бесплатно</title>
    <meta name="description" content="В этой игре, вы сможете почувствовать себя настоящим воином. На этот раз, ему предстоит оседлать ни кого-то, а самого настоящего, страшного дракона. Губка Боб представлен в новом образе - западного шерифа..." />
    <meta name="keywords" content="онлайн игра спнач боб Шериф Дикого Запада, онлайн игра губка боб Шериф Дикого Запада, играть губка боб приключения онлайн бесплатно">

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
        <!-- <noindex> -->
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
        <!-- </noindex> -->
        <div class="main">
            <div class="one_game">
                <img src="http://spanchbob.cqp/images/img27.jpg" width="311" height="250" align="left"/>
                <h1>Шериф Дикого Запада</h1><hr />
                <p>В этой игре, вы сможете почувствовать себя настоящим воином. На этот раз, ему предстоит оседлать ни кого-то, а самого настоящего, страшного дракона. Губка Боб представлен в новом образе - западного шерифа. В его руках длинный кнут. Именно им он и должен захватить своего врага. Движение дракона осуществляется за счет перемещения мыши. Кнутом же можно делать движение, нажав на левую кнопку мыши. Следует правильно изменять скорость движения, и регулировать размах кнута. Чем больше захватите врагов, тем больше начисляется за это очков. Мини игра отлично развивает моторику, логику и ловкость</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/sb_pest/PestOfTheWest.swf?adloader=true&amp;wmodeOverride=direct&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fsb_pest%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="725" height="363" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/sb_pest/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;wmodeOverride=direct&amp;base=http://www.nick.com/games/data/spongebob/sb_pest/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
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