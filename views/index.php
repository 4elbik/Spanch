<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/views/style.css" />
</head>
<body>
    <div class="content">
    <table border="1">
        <tr>
            <th>Изображение</th>
            <th>Название</th>
            <th>Описание</th>
        </tr>

        <?php foreach ($items as $item): ?>
        <tr>
            <td>
                <img src="<?php echo $item['img']; ?>" width="150" />
            </td>
            <td>
                <?php echo $item['title']; ?>
            </td>
            <td>
                <?php echo $item['description']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php echo 'Kek';#phpinfo(); ?>
    </table>
    </div>
</body>
</html>