<?php

$data = range(10, 30);

$iterator = new LimitIterator(new ArrayIterator($data), 0, 13);

foreach($iterator as $k=>$v) {
    printf("%s => %s\n", $k, $v);
}

foreach($iterator as $k=>$v) {
    printf("%s => %s\n", $k, $v);
}