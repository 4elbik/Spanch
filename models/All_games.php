<?php

require_once __DIR__ . '/../functions/DB.php';

function homepage_games()
{
    $query = "SELECT img,title,description FROM games ORDER BY date";
    return sql_query($query);
}

function admin_panel_games()
{
    $query = "SELECT * FROM games ORDER BY date";
    return sql_query($query);
}