<?php

$num = 10;

for ($i = 2; $i < $num;) {
    if ($num % $i == 0) {
        echo $num . 'は素数ではありません';
        break;
    }
    $i++;
}
if ($i == $num) {
    echo $num . 'は素数です';
}
