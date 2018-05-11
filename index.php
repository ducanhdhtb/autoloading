<?php
require "vendor/autoload.php";
use App\Library as MyApp;

$a = new Myapp\Demo;
$a->test();
echo "<hr>";
$b = new Myapp\signin;
$b->sayhello();
