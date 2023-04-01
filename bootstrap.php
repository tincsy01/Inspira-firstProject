<?php
require __DIR__.'/vendor/autoload.php';

define('VIEW', __DIR__ .DIRECTORY_SEPARATOR. 'lib' . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR);
$configuration= array(
    'db_dsn' => 'mysql:host=localhost;dbname=prodavnica',
    'db_user' => 'root',
    'db_pass' => '',
);