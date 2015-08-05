<?php

$firstData = range(1, 10);
$secondData = range(11, 20);

function test1($firstData, $secondData) {
    $data = [$firstData, $secondData];

    foreach ($data as $key => $value) {
        foreach ($value as $k => $v) {
            printf("%s: %s => %s\n", $key, $k, $v);
        }
    }
}

function test2($firstData, $secondData) {
    $data = array_merge($firstData, $secondData);

    foreach ($data as $k => $v) {
        printf("%s => %s\n", $k, $v);
    }
}

function test3($firstData, $secondData) {
    $firstIterator = new ArrayIterator($firstData);
    $secondIterator = new ArrayIterator($secondData);

    $append = new AppendIterator();
    $append->append($firstIterator);
    $append->append($secondIterator);

    foreach ($append as $key => $value) {
        printf("F: %s, S: %s, A: %s=>%s (%s)\n", $firstIterator->key(), $secondIterator->key(), $key, $value, $append->getIteratorIndex());
    }
}


test1($firstData, $secondData);


