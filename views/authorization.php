<?php

setcookie('admin', '1', time() + 3600);
echo 'Ты не админ! Ну или просто время авторизации закончилось :D';

if(isset($_COOKIE['admin'])) {
    header('Location: /../admin/index.php');
}
