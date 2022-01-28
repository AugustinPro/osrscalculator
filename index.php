<?php

require_once 'config/config.php';

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    require 'controllers/home.php';
} elseif ($page === 'login-prompt') {
    require 'controllers/prompt-contr.php';
} elseif ($page === 'login-form') {
    require 'controllers/login-contr.php';
} elseif ($page === 'signup-form') {
    require 'controllers/signup-contr.php';
} else {
    header("HTTP/1.1 404 Not Found");
}
