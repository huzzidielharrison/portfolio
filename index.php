<?php
require "vendor/autoload.php";
use helpers\View;

$subpath = $_SERVER['REQUEST_URI'];

View::render('pages/home');
