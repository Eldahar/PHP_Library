<?php

/**
 * Előre tekintés
 */

$data = new ArrayObject(range(0, 9));

$iterator = new CachingIterator($data->getIterator(), CachingIterator::FULL_CACHE);

foreach($iterator as $key=>$value) {
    printf("Key %s => Value %s, Current %s, HasNext %b, Next %s\n", $key, $value, $iterator->current(), $iterator->hasNext(), $iterator->getInnerIterator()->current());
    var_dump($iterator->getCache());
}