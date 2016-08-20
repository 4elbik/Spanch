<?php

function is_user()
{
    if (isset($_COOKIE['admin'])) {
        return true;
    } else {
        return false;
    }
}

