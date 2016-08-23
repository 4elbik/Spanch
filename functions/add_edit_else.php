<?php

function add_in($column, $value)
{
    $query = "INSERT INTO games(" . $column . ") value '" . $value . "'";
    sql_exec($query);
}

function edit_in($column, $value, $id)
{
    $query = "UPDATE games SET " . $column . " = '" . $value . "' WHERE id=" . $id;
    sql_exec($query);
}
