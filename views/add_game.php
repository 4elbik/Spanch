<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/views/style.css" />
</head>
<body>
<div class="content">
    <form action="/admin/index.php?<?php echo 'id='.$id.'&'.'action='.$action; ?>" enctype="multipart/form-data" method="post">
        <table border="1">

                <tr>
                    <th>Изображение</th>
                    <td>
                        <img src="<?php echo $item['img']; ?>" width="150" /><br />
                        <input type="file" name="game_img" />
                    </td>
                </tr>
                <tr>
                    <th>Название</th>
                    <td>
                        <input type="text" name="title" value="<?php echo $item['title']; ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Описание</th>
                    <td>
                    <textarea>
                        <?php echo $item['description']; ?>
                    </textarea>
                    </td>
                </tr>
                <tr>
                    <th>Код для вставки на страницу</th>
                    <td>
                    <pre><textarea>
                    <?php echo $item['code']; ?>
                    </textarea></pre>
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input type="date" name="date" value="<?php echo $item['date']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Сохранить" />
                    </td>
                    <td>
                        <a href="/admin/">Назад</a>
                    </td>
                </tr>

        </table>
    </form>
</div>
</body>
</html>