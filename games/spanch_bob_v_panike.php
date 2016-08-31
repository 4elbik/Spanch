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
                <img src="http://spanchbob.cqp/images/img8.jpg" width="311" height="250" align="left"/>
                <h1>Спанч Боб в панике</h1><hr />
                <p>Сегодня главному игры очень не повезло, он очутился запертый в старинном волшебном кувшине и сверху его пытаются атаковать страшные злодеи. Что делать, как быть, как расправиться с ними и выбраться из этого кувшина?
                    Вы готовы помочь герою? Если да, тогда играйте в игру Спанч Боб в панике и сделайте все возможное, что на его голову не упала ни одна мина. Бегайте в разные стороны, прыгайте куда угодно. Самое главное, чтоб остаться в живых. А для того, чтоб зарабатывать игровые очки, собирайте маленькие золотые кубки, пролетающие над главным персонажем.
                    Уровней в игре Спанч Боб в панике очень много и каждый новый будет намного сложней предыдущего. Будье внимательны, осторожны, увертливы и быстры, и тогда у вас обязательно все получится. Сыграйте хотя бы один раз и помогите персонажу вернуться в свой родной мир, где ему весело и спокойно. Удачи вам в прохождении и спасении Спанч Боба.</p><hr />
                <div class="game_window">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/spongebob/spongebob-squarepants-colossal-chaos/spongebob_colossal_chaos_loader.swf?adloader=true&amp;config=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-squarepants-colossal-chaos%2Fxml%2Fconfig.xml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebob-squarepants-colossal-chaos%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="725" height="378" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebob-squarepants-colossal-chaos/"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;config=http://www.nick.com/games/data/spongebob/spongebob-squarepants-colossal-chaos/xml/config.xml&amp;base=http://www.nick.com/games/data/spongebob/spongebob-squarepants-colossal-chaos/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
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