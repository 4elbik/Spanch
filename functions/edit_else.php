<?php

function edit_in($column, $value, $id)
{
    $query = "UPDATE games SET " . $column . " = '" . $value . "' WHERE id=" . $id;
    sql_exec($query);
}
