<?php

function connect_db()
{
    mysql_connect("localhost", "u0239970_default", "HL0H2!jj");
    mysql_select_db("u0239970_default");
    mysql_query("SET NAMES 'utf8'");
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

function edit_in_db_img($name, $location, $id)
{
    connect_db();
    $query = "UPDATE games SET img = " . "'" . $location . $name ."' WHERE id=" . $id;
    sql_exec($query);
}

function select_one_view($title)
{
    connect_db();
    $query = "SELECT views FROM games WHERE title='" . $title . "'";
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);
    foreach ($row as $value) {
        return $value;
    }
}

function add_in_db_view($title)
{
    $count = select_one_view($title);
    $count++;

    $query = "UPDATE `games` SET `views`=". $count . " WHERE `title`='" . $title . "'";
    $result = mysql_query($query);
}

