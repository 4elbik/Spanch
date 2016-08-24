<?php

function game_del($id)
{
    $query = 'DELETE FROM games WHERE id=' . $id;
    sql_exec($query);
}

game_del($_GET['id']);
header('Location: /admin/index.php');
