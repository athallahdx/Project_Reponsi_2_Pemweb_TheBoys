<?php
    ob_start();
    require_once '../app/init.php';
    Session::start();

    $app = new App;
    $controller = new Controller;