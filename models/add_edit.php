<?php

require_once __DIR__ . '/../functions/add_edit_img.php';
require_once __DIR__ . '/../functions/add_edit_else.php';

function one_game_info($id)
{
    $query = 'SELECT img, title, description, code, date FROM games WHERE id=' . $id;
    return sql_query($query);
}



//Обработка всех форм из one_game.php:
if (isset($_POST)) {
    if (!empty($_FILES['game_img']['name'])) {
        //Обработка картинки и сохранение её на сервере
        if ($_GET['action'] == 'add'){
            //add_img($id);
            echo 'No';
        } else {
            edit_img($id);
        }
    }
    if (!empty($_POST['title'])) {
        //Обновление базы данных с полем название игры
        if ($_GET['action'] == 'add'){
            //add_in('title', $_POST['title']);
            echo 'No';
        } else {
            edit_in('title', $_POST['title'], $id);
        }
    }
    if (!empty($_POST['description'])) {
        edit_in('description', $_POST['description'], $id);
    }
    if (!empty($_POST['code'])) {
        edit_in('code', $_POST['code'], $id);
    }
    if (isset($_POST['date'])) {
        //Обновление базы данных с полем даты публикации
        edit_in('date', $_POST['date'], $id);
    }
}