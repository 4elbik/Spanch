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
        <div class="main">
            <div class="one_game" style="width: 925px;">
                <img src="http://spanchbob.cqp/images/img7.jpg" width="311" height="250" align="left"/>
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