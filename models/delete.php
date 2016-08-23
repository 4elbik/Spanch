<?php

function game_del($id)
{
    $query = 'DELETE FROM games WHERE id=' . $id;
    sql_exec($query);
}

if (isset($_GET['id']) && isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        game_del($_GET['id']);
        header('Location: /admin/index.php');
    }
}