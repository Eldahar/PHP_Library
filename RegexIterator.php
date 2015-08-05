<?php

$data = [
    123     => 123456789,
    167     => 456789,
    264     => 123456,
    42      => 23456,
    128     => 1236789,
];

$search = 23456;

$filteredData = new RegexIterator(
    new ArrayIterator($data),
    "/^.*".$search.".*$/",
    RegexIterator::ALL_MATCHES
);

if(count(iterator_to_array($filteredData)) > 0) {
    printf("Találtam!\n");
} else {
    printf("Nem találtam!\n");
}

var_dump(
    iterator_to_array($filteredData)
);