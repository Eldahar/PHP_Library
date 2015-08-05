<?php

$iterator = new DirectoryIterator('.');

foreach($iterator as $key=>$value) {
    printf("%b : %s => %s\n", $iterator->isDot(), $key, $value);
}
