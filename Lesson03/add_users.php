<?php

$fileName = 'users.txt';

$name = readline('Name: ');
$date = readline('Birthday (dd-mm-YYYY): ');

$data = $name . "; " . $date . "\r\n";

$fileHandler = fopen($fileName, 'a');

if(fwrite($fileHandler, $data)) {
    echo "User data added to file";
} else {
    echo "Error";
}

fclose($fileHandler);