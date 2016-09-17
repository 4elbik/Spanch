<?php
require_once __DIR__ . '/../functions/translit.php';
require_once __DIR__ . '/../functions/DB.php';


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Игры Спанч Боб | Игры Боб | Играть Губка Боб | Флеш игры Губка Боб</title>
    <link rel="stylesheet" href="/views/style.css" type="text/css" />
    <link rel="shortcut icon" href="http://spanchbob.cqp/favicon2.2.png" type="image/x-icon">
</head>
<body>
<div id="background">
    <div class="logo">
        <a href="/"><img src="http://spanchbob.cqp/images/<?php echo rand(5,6); ?>.png" /></a>
    </div>
    <div class="content">
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
            <div class="gubka">
                <!-- Губка -->
            </div>
        </div>
        <div class="main">
            <div class="popular_games">
                <a href="http://spanchbob.cqp/games/spanch_bob_bolshie_priklyucheniya.php">
                    <img src="http://spanchbob.cqp/images/popular_game_1.jpg" width="593" />
                    <div class="popular_games_text">
                        <strong>СПАНЧ БОБ<hr /> <span class="next_str">"БОЛЬШИЕ ПРИКЛЮЧЕНИЯ"</span></strong>
                    </div>
                </a>
            </div>
            <div class="header_description">
                Здравствуйте любители онлайн игр, главный герой которых всеобщий любимец Спанч Боб. Или как его ещё называют Губка Боб Квадратные Штаны. Поклонники Спанч Боба, не только дети, но и множество взрослых. Надо признать, что наш герой слегка туповат и наивен, отчего часто и попадает в переделки, из которых, впрочем, ему
                <hr />
            </div>
            <?php foreach ($items as $item): ?>
            <div class="game">
                <a href="<?php echo "http://spanchbob.cqp/games/".strtolower(translit(implode('_', explode(' ', $item['title'])))).".php"; ?>"><img src="<?php echo $item['img']; ?>" width="188" height="140" align="left" alt="Игры спанч боб играть бесплатно. Игра спанч боб играть. Игры спанч боб бесплатно. Играть в Губка Боб - <?php echo $item['title']; ?>. Губка боб игры онлайн" /><h2><?php echo $item['title']; ?></h2></a><hr />
                <p><?php echo $item['little_description']; ?></p>
            </div>
            <?php endforeach; ?>
            <div class="footer_description">
                <hr />
                Но возможно это и привлекает нас в нём. На нашем сайте мы подобрали онлайн игры на любой вкус, тут можно найти трилогию Супер драки, из названия которой понятно о чём идет речь в этих играх. Любителям менее активных игр, можно порекомендовать логические игры Песок и Уборка. Хотя и в них расслабиться, особо не получится. Для любителей квестов можно порекомендовать игру Приключение Боба или не менее увлекательную игру Остров ужасов. Уверены, что в этом разнообразии игр каждый найдёт для себя нечто интересное и увлекательное. Кроме того, стоит упомянуть, что во все флеш онлайн игры о Спанч Бобе на нашем сайте можно играть бесплатно и без регистрации. И главное, не забывайте регулярно возвращаться на наш сайт, ведь тут постоянно появляются все лучшие игровые новинки о нашем герое Губке Бобе Квадратные Штаны, которые мы выискиваем для Вас на бескрайних просторах интернета. В общем , если хотите хорошо провести время, бесплатно играть в браузерные онлайн игры, ещё раз встретиться с обитателями города Бикини Боттом, Спанч Бобом, Патриком Старом, с улиткой по кличке Гэри, соседом Губки Боба осьминогом Сквидвардом Тентикалсом, белкой-каратисткой Сэнди Чикс, и конечно со стариком и скрягой мистером Юджином Крабсом, ну и ё как же без главгада сериала микроскопического Шелдона Планктона. Все ждут только Вас! Добро пожаловать! Приятной игры!
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright &copy; 2016</p>
    </div>
</div>
</body>
</html>