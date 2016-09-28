<?php
function is_loaded(){
    if ($_FILES['game_img']['error'] > 0) { //проверяем загрузку файла на наличие ошибок
        /*в зависимости от номера ошибки выводим соответствующее сообщение
        UPLOAD_MAX_FILE_SIZE - значение установленное в php.ini
        MAX_FILE_SIZE значение указанное в html-форме загрузки файла*/
        switch ($_FILES['game_img']['error']) {
            case 1: echo 'Размер файла превышает допустимое значение UPLOAD_MAX_FILE_SIZE'; break;
            case 2: echo 'Размер файла превышает допустимое значение MAX_FILE_SIZE'; break;
            case 3: echo 'Не удалось загрузить часть файла'; break;
            case 4: echo 'Файл не был загружен'; break;
            case 6: echo 'Отсутствует временная папка.'; break;
            case 7: echo 'Не удалось записать файл на диск.'; break;
            case 8: echo 'PHP-расширение остановило загрузку файла.'; break;
        }
        exit;
    }
}

function edit_img($id)
{
    is_loaded();

    if (is_uploaded_file($_FILES['game_img']['tmp_name'])) {
        $location = 'http://www.igry-spanch-bob.ru/images/';
        move_uploaded_file($_FILES['game_img']['tmp_name'], __DIR__ . '/../images/'.'img'.$id.'.jpg');
        edit_in_db_img('img'.$id.'.jpg', $location, $id);
    }
}