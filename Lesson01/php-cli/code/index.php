<?php

// echo "Hello!<br/>".date("Y-m-d H:i:s") ."<br/><br/>";
// echo "some else...";
// phpinfo();

$name = "Valerii";
$date = date("d.m.Y");

$school = "GB";
$ptrSchool = &$school;
$copySchool = $school;

$school = "GB - sheet";

echo var_dump($ptrSchool);
echo "<br>";
echo var_dump($copySchool);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO, <?=$name?>!!!</h1>
    <h2>Today is <?=$date?></h2>
    <h3>Time: <?=date("i:H")?></h3>
</body>
</html>