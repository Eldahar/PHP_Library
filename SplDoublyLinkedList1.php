<?php

/**
 * Láncolt lista
 *
 * Sorrendezett lista készítésére
 */

$list = new SplDoublyLinkedList();

# Sorban belerakja
$list->push(1);
$list->push(2);
$list->push(3);
$list->push(4);

# az elejére rakja
$list->unshift(5);
$list->unshift(6);
$list->unshift(7);

foreach($list as $key=>$value) {
    echo sprintf("%s => %s\n", $key, $value);
}
