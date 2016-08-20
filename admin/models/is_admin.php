<?php

require_once __DIR__ . '/../../functions/DB.php';
require_once __DIR__ . '/../../functions/is_user.php';

if (!empty($_POST)) {
    $query = "SELECT * FROM users";
    $res = sql_query($query);
    foreach ($res as $value) {
        if ($value['name'] == $_POST['name'] && $value['pass'] == $_POST['password']) {
            setcookie('admin', '1', time() + 3600);
            header('Location: /admin/index.php');
            exit;
        } else {
            $msg_error = "Неверный логин/пароль!";
        }
    }
}
