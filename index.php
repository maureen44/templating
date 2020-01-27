<?php
//Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require ("vendor/autoload.php");

//instantiate Fat-free
$f3 = Base::instance();

//define default route
$f3->route('GET /', function()
{
    echo "<h1>Welcome</h1>";
});

// run f3
$f3->run();
