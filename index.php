<?php
require "vendor/autoload.php";
use TaskManager\Request;
use TaskManager\Router;
require Router::load('routes.php')
    -> direct(Request::uri());

//require_once 'view/index.view.php';