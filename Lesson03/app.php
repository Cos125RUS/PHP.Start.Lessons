<?php

//require_once('src/main.function.php');
//require_once('src/template.function.php');
//require_once('src/file.function.php');

require_once ('vendor/autoload.php');

$result = main('config.ini');

echo $result;