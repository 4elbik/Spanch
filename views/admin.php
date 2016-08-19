<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/views/style.css" />
</head>
<body>
<form action="/models/add_edit.php" method="post">
    <input type="submit" value="Добавить игру" />
</form>
<div class="content">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Изображение</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Date</th>
            <th></th>
            <th></th>
        </tr>

            <?php foreach ($items as $item): ?>
        <tr>
                <td>
                    <?php echo $item['id']; ?>
                </td>
                <td>
                    <img src="<?php echo $item['img']; ?>" width="150" />
                </td>
                <td>
                    <?php echo $item['title']; ?>
                </td>
                <td>
                    <?php echo $item['description']; ?>
                </td>
                <td>
                    <?php echo $item['date']; ?>
                </td>
                <td>
                    <a href="#">Редактировать</a>
                </td>
                <td>
                    <a href="#">Удалить</a>
                </td>
        </tr>
            <?php endforeach; ?>

    </table>
</div>
</body>
</html>