<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Сквидвард - каратист');

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
    <title>Играть в игру Спанч Боб - Карате | онлайн игра Губка Боб - Карате | Играть онлайн в Губка боб драки бесплатно</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="онлайн игра спнач боб карате, онлайн игра губка боб карате, играть губка боб драки онлайн бесплатно">

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
            <div class="one_game" style="width: 950px;">
                <img src="http://igry-spanch-bob.ru/images/img3.jpg" alt="Играть в Губка Боб - Карате. Играть в игру Спанч Боб - Карате" width="311" height="250" align="left"/>
                <h1>Сквидвард - каратист</h1><hr />
                <p>Уже давно Сквидвард мечтал изучить основы карате и с полу удара разбивать любые предметы. И вот ему выпал такой отличный шанс, его тренером стал Спанч Боб. Перед вами будет поставлена непростая задача в данной игре - вы должны будете за определенное время разбить рукой как можно больше фруктов, бетонных блоков и прочего, которые двигаются по конвейеру. Но будьте внимательны, чтоб не нарваться на открытую ракушку, так как она способна съесть главного героя и тогда вы потеряете жизнь. Когда дело будет подходить к концу уровня, мочите все, что будете видеть. Поверьте, вам обязательно понравится игра Сквидвард каратист и играть в нее вы можете с лучшими друзьями. Установите новый рекорд карате, играя, разбейте всё одной рукой и будьте уверены в том, что с такими тренировками Сквидвард обязательно познает тонкости этой великой культуры.</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/spongebob-kah-rah-tay-squid/spongebob_karate_squid.swf?adloader=true&amp;wmodeOverride=direct&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-kah-rah-tay-squid%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="560" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-kah-rah-tay-squid/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;wmodeOverride=direct&amp;base=http://www.nick.com/games/data/spongebob/spongebob-kah-rah-tay-squid/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games" >
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