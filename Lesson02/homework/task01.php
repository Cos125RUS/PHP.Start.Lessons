<?php

function mathematic($val1, $val2, $operation)
{
    return match ($operation) {
        "+" => $val1 + $val2,
        "-" => $val1 - $val2,
        "*" => $val1 * $val2,
        "/" => $val1 / $val2,
        default => "Unknown operation"
    };
}

echo mathematic(2, 3, "+") . "\n";
echo mathematic(5, 3, "-") . "\n";
echo mathematic(2, 3, "*") . "\n";
echo mathematic(6, 3, "/") . "\n";
echo mathematic(2, 3, "%") . "\n";
