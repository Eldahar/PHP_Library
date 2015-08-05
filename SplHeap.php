<?php

/**
 * A kulcsot nem tartja meg
 */

$data = [2, 4, 1, 76, 42, 23, 0, 10, 2];

$heap = new SplMinHeap();
foreach($data as $v) {
    $heap->insert($v);
}

printf("TOP: %s\n", $heap->top());

foreach($heap as $k=>$v) {
    printf("%s => %s\n", $k, $v);
}

$heap = new SplMaxHeap();
foreach($data as $v) {
    $heap->insert($v);
}

printf("TOP: %s\n", $heap->top());

foreach($heap as $k=>$v) {
    printf("%s => %s\n", $k, $v);
}