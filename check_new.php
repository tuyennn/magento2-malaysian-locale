<?php

$mainCsv = fopen('ms_MY.csv', 'r');
$phrasesCsv = fopen('phrases.csv', 'r');
$newCsv = fopen('ms_MY_new.csv', 'w');

$old = array();

while (($data = fgetcsv($mainCsv)) !== false) {
    $key = $data[0];
    $old[$key] = true;
}

while (($data = fgetcsv($phrasesCsv)) !== false) {
    $key = $data[0];
    if (array_key_exists($key, $old)) {
        continue;
    }
    $data[1] = '';
    fputcsv($newCsv, $data);
}

fclose($mainCsv);
fclose($phrasesCsv);
fclose($newCsv);
