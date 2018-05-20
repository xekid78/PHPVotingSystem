<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:host=localhost;dbname=poll_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '########');

session_start();

require_once(__DIR__ . '/functions.php');
