<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Пока Патрик спит');

$tops = top_games();
$all_games = homepage_games();

$rand_game = $all_games[rand(0, count($all_games)-1)];
if (empty($result)) {
    $result[] = $rand_game;
}
while (true) {
    if (count($result) > 5) break;
    $rand_game = $all_games[rand(0, count($all_games)-1)];
    if (!in_array($rand_game, $result, true)) {
        $result[] = $rand_game;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="nofollow"/>
    <title>Играть в игру Спанч Боб - Пока Патрик спит | онлайн игра Губка Боб - Пока Патрик спит | Играть онлайн в Губка боб приключения бесплатно</title>
    <meta name="description" content="Пока Патрик спит, Спанч Боб решил немного прогуляться по морским просторам и попрыгать по красивым подводным камням. Сколько же тут прекрасного: морские обитатели, растения, фауна..." />
    <meta name="keywords" content="губка боб пока патрик спит, онлайн игра спнач боб пока патрик спит, онлайн игра губка боб пока патрик спит, играть губка боб приключения онлайн бесплатно">

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
                <img src="http://www.igry-spanch-bob.ru/images/img7.jpg" alt="Играть в Губка Боб - Пока Патрик спит. Играть в игру Спанч Боб - Пока Патрик спит" width="311" height="250" align="left"/>
                <h1>Пока Патрик спит</h1><hr />
                <p>Пока Патрик спит, Спанч Боб решил немного прогуляться по морским просторам и попрыгать по красивым подводным камням. Сколько же тут прекрасного: морские обитатели, растения, фауна. И все это сможет увидеть не только Губка Боб, но и ты, играя вместе с ним в эту увлекательную игру.
                    Управлять необходимо стрелками на клавиатуре, нужно будет прыгать с одного камня на другой, все выше и выше. Чем больше камней перепрыгнешь - тем больше заработаете игровых очков. Но не думаете, что это так легко, ведь на вашем пути могут встречаться и препятствия, на которые желательно не нарываться. Если вы увидите на одном из камней подушки, прыгайте на них обязательно и тогда взлетите вверх намного быстрее.
                    Играйте в игру со Спанч Бобом Пока Патрик спит, покоряйте морские просторы и сделайте все возможное, чтоб ваш личный рекорд был максимальным. Вам обязательно понравится, удачи в игре, юные путешественники!</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <object id="objectFlashPiece" width="960" height="560" data="http://www.nick-asia.com/gsp/international/nick-asia.com/games/spongebob-squarepants/sb_lightsoutpatrick/main-flash.swf" type="application/x-shockwave-flash">
                        <param name="movie" value="http://www.nick-asia.com/gsp/international/nick-asia.com/games/spongebob-squarepants/sb_lightsoutpatrick/main-flash.swf">
                        <param name="menu" value="false">
                        <param name="wmode" value="direct">
                        <param name="allowFullscreen" value="true">
                        <param name="allowScriptAccess" value="always">
                        <param name="flashvars" value="config=">
                        <param name="base" value=".">
                    </object>
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