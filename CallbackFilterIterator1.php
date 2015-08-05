<?php


$data = new ArrayObject(range(0, 9));

$iterator = new CallbackFilterIterator($data->getIterator(), function($current) {
    return $current < 5;
});

foreach($iterator as $k=>$v) {
    printf("%s => %s\n", $k, $v);
}