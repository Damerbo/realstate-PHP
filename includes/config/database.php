<?php

function connectDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '', 'realstate_crud');

    if (!$db) {
        echo 'Error de conexión de base de datos';
        exit;
    }

    return $db;
}
