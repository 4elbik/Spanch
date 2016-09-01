<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Спанч Боб против зла');

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
        <div class="main">
            <div class="one_game" style="width: 925px;">
                <img src="http://spanchbob.cqp/images/img13.jpg" width="311" height="250" align="left"/>
                <h1>Спанч Боб против зла</h1><hr />
                <p>Непростая задача стоит перед главными героями игры Спанч Боб против зла. Известный всем смелый и отважный Губка Боб со своими друзьями отправились в старинный заколдованный замок, полон привидений и основная их задача расправиться со всей нечистью, которая тут живет. Вам придется бродить по нескольким этажам замка, открывать множество запертых дверей, разгадывать тайны и головоломки замка. И все это лишь для того, чтоб очистить это старинное место от привидений. В вашем распоряжении будет специальное оружие для ловли привидений и колба для их сбора. Одевайте защитный скафандр и вперед, на охоту за нечистью. Не думайте, что играть будет легко, так как в любой момент на вас из-за угла может напасть злое чудище. Не бойтесь его, ловите и продолжайте выполнение этой непростой миссии. Играйте в игру Спанч Боб против зла и победите все зло, живущее в старинном замке.</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/nickelodeon/nickelodeon-mystery-mansion/nick_nicktoons_mystery_mansion.swf?wmodeOverride=direct&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fnickelodeon%2Fnickelodeon-mystery-mansion%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="560" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/nickelodeon/nickelodeon-mystery-mansion/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="wmodeOverride=direct&amp;base=http://www.nick.com/games/data/nickelodeon/nickelodeon-mystery-mansion/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
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