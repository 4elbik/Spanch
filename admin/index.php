<?php

if(!isset($_COOKIE['admin'])) { //Администратор ли это? Если нет то:
    include_once __DIR__ . '/../views/authorization.php';
} else { //Ага, значит это точно он!

    require __DIR__ . '/../models/All_games.php';

    $items = admin_panel_games();

    include __DIR__ . '/../views/admin.php';

}