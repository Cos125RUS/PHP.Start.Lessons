<?php

$fileName = "test01.txt";

if (file_exists($fileName) && is_readable($fileName)) {
    $file = fopen($fileName, 'rb');

    $contents = '';
    while (!feof($file)) {
        $contents .= fread($file, 10);
    }

    fclose($file);

    echo $contents;
} else
    echo "File opening error";

