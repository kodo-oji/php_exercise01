<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述

foreach ($subjects as $value) {
    switch ($value) {
        case '数学':
            $msg = 'の試験は明日です。' . '<br>';
            break;
        case '英語':
            $msg = 'の試験は明後日です。' . '<br>';
            break;
        case '理科':
            $msg = 'の試験は明々後日です。' . '<br>';
            break;
        case '社会':
            $msg = 'の試験は昨日です。' . '<br>';
            break;
        case '国語':
            $msg = 'の試験は中止です。' . '<br>';
        default:
    }
    echo $value . $msg;
}
