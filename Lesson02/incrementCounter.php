<?php

$counter = 0;
function incrementCounter(int &$counter)
{
    $counter++;
}
echo $counter . "\n";
incrementCounter($counter);
echo $counter;
