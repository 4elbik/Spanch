<?php

require_once __DIR__ . '/../functions/DB.php';

function homepage_games()
{
    $query = "SELECT img,title,little_description FROM games ORDER BY id DESC";
    return sql_query($query);
}

function top_games()
{
    $query = "SELECT img,title FROM games ORDER BY views DESC limit 5";
    return sql_query($query);
}

function admin_panel_games()
{
    $query = "SELECT id,img,title,description,date FROM games ORDER BY id DESC";
    return sql_query($query);
}