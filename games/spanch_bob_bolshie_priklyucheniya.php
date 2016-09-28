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
    <meta name="robots" content="nofollow"/>
    <title>Играть в игру Губка Боб - Большое приключение | онлайн игра Спанч Боб - Большое приключение | Играть онлайн в Губка боб приключения бесплатно</title>
    <meta name="description" content="Игра Губка боб большое приключение представляет собой небольшую РПГ с очень инетересным сюжетом, в котором задействованы все жители БикиниБоттом, начиная от всеми известных персонажей - Патрика, Сквидварда, Мистера Крабса, Планктона и других и заканчивая малоизвестными.. Большое приключение Губки Боба начинается с его ананасового дома, где предстоит научится основам игры..." />
    <meta name="keywords" content="игры губка боб большое приключение, игры губка боб квадратные штаны большие приключения, играть игру губка боб большое приключение, играть губка боб приключения онлайн бесплатно">

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
                <img src="http://www.igry-spanch-bob.ru/images/big_adv.png" alt="Играть в Губка Боб - большое приключение. Играть в игру Спанч Боб - большое приключение" width="311" height="250" align="left" />
                <h1>Губка Боб большое приключение</h1><hr />
                <p>Игра Губка боб большое приключение представляет собой небольшую РПГ с очень инетересным сюжетом, в котором задействованы все жители БикиниБоттом, начиная от всеми известных персонажей - Патрика, Сквидварда, Мистера Крабса, Планктона и других и заканчивая малоизвестными.. Большое приключение Губки Боба начинается с его ананасового дома, где предстоит научится основам игры и пройти первое задание, после которого, на удивление мое, сразу будет драка с боссом. Очень инетесное большое приключение спанч боба только начнется и дальше будет только интереснее и интереснее.. Есть система уровней, которая позволяет открывать определенные навыки и легче справляться со всеми трудностями, возникающие на всём протяжении этого большого приключения. Главное начать, а дальше уже не возможно будет остановиться!)</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object type="application/x-shockwave-flash" name="game-play-container" data="http://www.nick.com/nick-assets/games/swfs/wrapper_10.swf?gameSwf=/games/data/spongebob/spongebobs-big-adventures/game2.swf&amp;gameSwfProtected=true&amp;?adloader=true&amp;config=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebobs-big-adventures%2Fxml%2Fconfig.xml&amp;base=http%3A%2F%2Fwww.nick.com%2Fgames%2Fdata%2Fspongebob%2Fspongebobs-big-adventures%2F&amp;gameName=Fun+Game+Title&amp;gameURI=&amp;adfree=false" width="960" height="500" id="game-play-container" style="visibility: visible;"><param name="base" value="http://www.nick.com/games/data/spongebob/spongebobs-big-adventures/"><param name="wmode" value="transparent"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="flashvars" value="adloader=true&amp;config=http://www.nick.com/games/data/spongebob/spongebobs-big-adventures/xml/config.xml&amp;base=http://www.nick.com/games/data/spongebob/spongebobs-big-adventures/&amp;gameName=Fun Game Title&amp;gameURI=&amp;adfree=false"></object>
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