<?php

function test1() {
    $first = range(1, 10);
    $second = range(11, 20);
    $third = range(21, 30);

    $iterator = new MultipleIterator();
    $iterator->attachIterator(new ArrayIterator($first), 0);
    $iterator->attachIterator(new ArrayIterator($second), 1);
    $iterator->attachIterator(new ArrayIterator($third), 2);

    foreach ($iterator as $key => $value) {
        printf("%s => %s, %s => %s, %s => %s\n", $key[0], $value[0], $key[1], $value[1], $key[2], $value[2]);
    }
}

function test2() {
    $first = [
        1   => 1,
        5   => 5,
        10  => 10
    ];
    $second = range(11, 21);
    $third = [
        3   => 3,
        5   => 5,
        7   => 7
    ];

    $iterator = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
    $iterator->attachIterator(new ArrayIterator($first), 'elso');
    $iterator->attachIterator(new ArrayIterator($second), 'masodik');
    $iterator->attachIterator(new ArrayIterator($third), 'harmadik');

    foreach ($iterator as $key => $value) {
        printf("%s => %s, %s => %s, %s => %s\n", $key['elso'], $value['elso'], $key['masodik'], $value['masodik'], $key['harmadik'], $value['harmadik']);
    }
}

test2();