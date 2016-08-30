<?php
require_once __DIR__ . '/../functions/DB.php';
require_once __DIR__ . '/../functions/translit.php';

$way = __DIR__ . '/../games/';

$query = 'SELECT title FROM games';

$res = sql_query($query);
foreach ($res as $one) {
    $all_pages = strtolower(translit(implode('_', explode(' ', $one['title'])))) . '.php';
    if (!file_exists($way . $all_pages)) {
        // Если нет такой страницы - то создаем.
        $file = fopen($way . $all_pages, 'w');
        fwrite($file, file_get_contents(__DIR__ . "/../views/pattern.php"));
        $file = fclose();
    }
}