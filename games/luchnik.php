<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Лучник');

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
    <title>Играть в игру Спанч Боб Лучник | онлайн игра Губка Боб - Лучник | Играть онлайн в Губка боб стрелялки бесплатно</title>
    <meta name="description" content="В мире Спанч Боба скоро начнутся соревнования по стрельбе из лука и главный приз получит тот герой, который сможет подстрелить как можно больше воздушных шариков..." />
    <meta name="keywords" content="лучник спанч боб игра, онлайн игра Губка Боб - лучник, губка боб соревнования лучника онлайн, играть губка боб стрелялки онлайн бесплатно">

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
                <img src="http://igry-spanch-bob.ru/images/img10.jpg" alt="Играть в Губка Боб - Лучник. Играть в игру Спанч Боб - Лучник" width="311" height="250" align="left"/>
                <h1>Лучник</h1><hr />
                <p>В мире Спанч Боба скоро начнутся соревнования по стрельбе из лука и главный приз получит тот герой, который сможет подстрелить как можно больше воздушных шариков. Внимательно ознакомьтесь с управлением игры и сделайте все возможное, чтоб Губка Боб выиграл эти соревнования.
                    Как только Патрик будет выпускать в небо воздушный шар, с помощью клавиш стрелок и пробела вы должны направить лук так, чтоб стрела попала точно в шар. После того, как вы научите главного героя метко стрелять, он обязательно сможет выиграть этот непростой турнир, а для него это очень важно, ведь это Губка Боб квадратные штаны, любимец всех детей. И именно он должен быть лидером и победителем во всех турнирах.
                    Не теряйте время, запускайте игру Губка Боб супер лучник и стреляйте по воздушным шарам метко. Удачи вам в турнире.  </p><hr />
                <div class="game_window">
                    <object class="game-object" type="application/x-shockwave-flash" data="http://freeonlinegames.com.free-game.us/shooting/mi9-19145/spongebob-super-archer.swf" width="725" height="527">
                        <param name="quality" value="high">
                        <param name="allowScriptAccess" value="always">
                        <param name="swliveconnect" value="true">
                        <param value="http://freeonlinegames.com.free-game.us/shooting/mi9-19145/" name="base">
                        <param value="direct" name="wmode">
                        <param name="menu" value="false">
                        <param name="allownetworking" value="internal">
                        <param name="flashvars" value="">
                    </object>
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