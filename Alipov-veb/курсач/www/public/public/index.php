<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

session_start();

require dirname(__DIR__) . '/config/config.php'; 
require CORE . '/funcs.php';


require CORE . '/router.php';

