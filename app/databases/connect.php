<?php

function connect()
{
    return new PDO("mysql:host=localhost;dbname=php-2", "root", "", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
}
