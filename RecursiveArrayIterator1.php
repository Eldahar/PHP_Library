<?php

$data = [
    0 => range(0, 9),
    1 => [
        2 => range(10, 20)
    ]
];

function traverse(RecursiveArrayIterator $iterator) {
    while ( $iterator->valid() ) {

        if ( $iterator->hasChildren() ) {
            printf("HasChild: %s\n", $iterator->key());
            traverse($iterator->getChildren());
        } else {
            printf("%s => %s\n", $iterator->key(), $iterator->current());
        }

        $iterator->next();
    }
}

$iterator = new RecursiveArrayIterator($data);

traverse($iterator);

