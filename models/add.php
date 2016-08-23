<?php

require_once __DIR__ . '/../functions/DB.php';

$query = "INSERT INTO games (id, img, title, description, code, date) VALUES (NULL, '/images/img2.jpg', '', '', '', '')";
sql_exec($query);