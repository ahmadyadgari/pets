<?php

// 328/Week2/pets/index.php
// This is my CONTROLLER!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
// https://ayadgari.greenriverdev.com/328/Week2/pets/

$f3->route('GET /', function() {
    // echo '<h1>Pets Website!</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/pets-page.html');
});

// Run Fat-Free
$f3->run();