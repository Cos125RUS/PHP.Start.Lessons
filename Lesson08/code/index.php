<?php

$memory_start = memory_get_usage();

require_once('./vendor/autoload.php');

use Geekbrains\Application1\Application\Application;

try {
    $app = new Application();
    echo $app->run();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $memory_finish = memory_get_usage();
    echo "<h4>Потребление: " . ($memory_finish - $memory_start)/1024/1024 . " Мбайт</h4>";
}
