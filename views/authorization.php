<?php

if(isset($_COOKIE['admin'])) {
    header('Location: /../admin/index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <form action="/admin/index.php" method="post">
        <label>
            Логин:<br />
            <input type="text" name="name" />
            <?php echo $msg_error; ?>
        </label><br />
        <label>
            Пароль:<br />
            <input type="password" name="password" />
        </label>
        <input type="submit" value="Войти" />
    </form>

</body>
</html>
