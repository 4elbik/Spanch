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
    <meta name="robots" content="nofollow"/>
    <title>Играть в игру Спанч Боб - Хэллоуин | онлайн игра Губка Боб - Хэллоуин | Играть онлайн в Губка боб приключения бесплатно</title>
    <meta name="description" content="Непростая задача стоит перед главными героями игры Спанч Боб Хэллоуин. Известный всем смелый и отважный Губка Боб со своими друзьями отправились в старинный заколдованный замок, полный привидений ..." />
    <meta name="keywords" content="онлайн игра спнач боб Хэллоуин, онлайн игра губка боб Хэллоуин, играть губка боб приключения онлайн бесплатно">

    <link rel="stylesheet" type="text/css" href="/views/style.css" />
    <link rel="shortcut icon" href="http://www.igry-spanch-bob.ru/favicon2.2.png" type="image/x-icon">
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
        <a href="/"><img src="http://www.igry-spanch-bob.ru/images/6.png" /></a>
    </div>
    <div class="content">
        <div class="main">
            <div class="one_game" style="width: 925px;">
                <img src="http://www.igry-spanch-bob.ru/images/img13.jpg" alt="Играть в Губка Боб - Хэллоуин. Играть в игру Спанч Боб - Хэллоуин" width="311" height="250" align="left"/>
                <h1>Спанч Боб Хэллоуин</h1><hr />
                <p>Непростая задача стоит перед главными героями игры Спанч Боб Хэллоуин. Известный всем смелый и отважный Губка Боб со своими друзьями отправились в старинный заколдованный замок, полный привидений и основная их задача расправиться со всей нечистью в канун хэллоуина, которая тут живет. Вам придется бродить по нескольким этажам замка, открывать множество запертых дверей, разгадывать тайны и головоломки замка. И все это лишь для того, чтоб очистить это старинное место от привидений. В вашем распоряжении будет специальное оружие для ловли привидений, сделанное как раз в этот хэллоуинский день, и колба для их сбора. Одевайте защитный скафандр и вперед, на охоту за нечистью. Не думайте, что играть будет легко, так как в любой момент на вас из-за угла может напасть злое чудище. Не бойтесь его, ловите и продолжайте выполнение этой непростой миссии. Играйте в игру Спанч Боб Хэллоуин и победите все зло, живущее в старинном замке.</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/games/data/nickelodeon/nickelodeon-mystery-mansion/nick_nicktoons_mystery_mansion.swf?wmodeOverride=direct&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fnickelodeon%2Fnickelodeon-mystery-mansion%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="560" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/nickelodeon/nickelodeon-mystery-mansion/"><param name="wmode" value="direct"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="wmodeOverride=direct&amp;base=http://www.nick.com/games/data/nickelodeon/nickelodeon-mystery-mansion/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
                </div>
            </div><hr />
            <!-- <noindex> -->
            <div class="more_games">
                <h1>Другие игры</h1>
                <?php foreach ($result as $item): ?>
                    <div class="game">
                        <a href="<?php echo "http://www.igry-spanch-bob.ru/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="http://www.igry-spanch-bob.ru/images/<?php echo $item['img']; ?>" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн" title="Игра Спанч Боб - <?php echo $item['title']; ?>" width="188" height="140" align="left" /><h2><?php echo $item['title']; ?></h2></a><hr />
                        <p><?php echo $item['little_description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- </noindex> -->
        </div>
    </div>
    <!-- <noindex> -->
    <div class="footer"><!--LiveInternet counter--><script type="text/javascript"><!--
            document.write("<a href='//www.liveinternet.ru/click' "+
                "target=_blank><img src='//counter.yadro.ru/hit?t15.6;r"+
                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                ";"+Math.random()+
                "' alt='' title='LiveInternet: показано число просмотров за 24"+
                " часа, посетителей за 24 часа и за сегодня' "+
                "border='0' width='88' height='31'><\/a>")
            //--></script><!--/LiveInternet-->
        <p style="margin-top: 3px;">Copyright &copy; 2016</p>
    </div>
    <!-- </noindex> -->
</div>
</body>
</html>