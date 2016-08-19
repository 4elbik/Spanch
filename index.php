<?php

require_once __DIR__ . '/models/All_games.php';

$items = homepage_games();

include_once __DIR__ . '/views/index.php';

