<?php
require 'vendor/autoload.php';

use Jlyu\TinyConfig;

$c = new TinyConfig();

var_dump($c->hello->foo);
