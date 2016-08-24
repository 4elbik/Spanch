<?php

require_once __DIR__ . '/models/is_admin.php';


if(!is_user()) { //Администратор ли это? Если нет то:
    include_once __DIR__ . '/../views/authorization.php';
} else { //Ага, значит это точно он!

    require_once __DIR__ . '/../models/All_games.php'; //Функции для отрисовки контента админки admin_panel_games()
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if ($action == 'edit') {
            $id = $_GET['id'];
            require_once __DIR__ . '/../models/add_edit.php';
            $items = one_game_info($id);
            include __DIR__ . '/../views/one_game.php';
        } elseif ($action == 'add') {
            require_once __DIR__ . '/../models/add.php';
            header('Location: /admin/index.php');
        } else {
            require_once __DIR__ . '/../models/delete.php';
        }
    } else {
        $items = admin_panel_games();

        include __DIR__ . '/../views/admin.php';
    }
}

