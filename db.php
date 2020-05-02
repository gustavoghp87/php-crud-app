<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

mysqli_connect_error();

if (isset($conn)) {
    echo "DB connected";
}

?>