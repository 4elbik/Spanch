<?php

function connect_db()
{
    mysql_connect("localhost", "root", "");
    mysql_select_db("spanch_bob");
}

function sql_query($query)
{
    connect_db();
    $res = mysql_query($query);
    while ($row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
    return $ret;
}

function sql_exec($query)
{
    connect_db();
    mysql_query($query);
}

function add_in_db_img($name, $location, $id)
{
    $query = "INSERT INTO games(img) VALUES(" . "'" . $location . $name ."') WHERE id=" . $id;
    sql_exec($query);
}

function edit_in_db_img($name, $location, $id)
{
    $query = "UPDATE games SET img = " . "'" . $location . $name ."' WHERE id=" . $id;
    sql_exec($query);
}

