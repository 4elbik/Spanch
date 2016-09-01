<?php
require_once __DIR__ . '/../models/All_games.php';
require_once __DIR__ . '/../functions/translit.php';

add_in_db_view('Патрик vs Спанч');

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
            <div class="one_game" style="width: 950px;">
                <img src="http://spanchbob.cqp/images/img2.jpg" width="311" height="250" align="left"/>
                <h1>Патрик vs Спанч</h1><hr />
                <p>В мире, где живет любимчик многих детей Спанч Боб, не так все и просто. Хоть у главного героя и много друзей, но очень часто попадаются такие ситуации, когда ты вынужден бороться за свою территорию и отстаивать своё мнение в Бикинни Боттом. Так и в игре Патрик против Спанч Боба, вам придется помочь главному герою спастись от медуз, которые будут пытаться его атаковать по приказу Патрика. А в руках то у вас будет всего лишь кухонная лопатка. Но лопатка эта непростая, она способна резать медуз, главное научиться правильно орудовать таким необычным инструментом для боя. Вы должны сделать все возможное, чтоб Спанч Боб выжил в это нелегкой битве и все его противники были уничтожены. Играйте в игру Патрик против Спанч Боба и отчистите подводный мир от героев, которые вечно мутят воду тут. Удачи вам, юные спасатели!</p><hr />
                <div class="game_window" style="margin-left: -20px;">
                    <iframe src="http://kdata1.com/2015/12/spongebob_squarepants_cardbored/" width="960" height="560"></iframe>
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