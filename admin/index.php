<?php

require_once __DIR__ . '/models/is_admin.php';


if(!is_user()) { //Администратор ли это? Если нет то:
    include_once __DIR__ . '/../views/authorization.php';
} else { //Ага, значит это точно он!



    require_once __DIR__ . '/../models/All_games.php';
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'add' || $_GET['action'] == 'edit') {
            $id = $_GET['id'];
            $action = $_GET['action'];
            require_once __DIR__ . '/../models/add_edit.php';
            if ($_GET['action'] == 'edit') {
                $items = one_game_info($id);
                include __DIR__ . '/../views/one_game.php';
            } else {
                $id = sql_query("SELECT max(id) as 'id' FROM games");
                $id = ++$id[0]['id'];
                var_dump($id);
                include __DIR__ . '/../views/add_game.php';
            }

        }
    } else {
        $items = admin_panel_games();

        include __DIR__ . '/../views/admin.php';
    }

    require_once __DIR__ . '/../models/delete.php';
}

