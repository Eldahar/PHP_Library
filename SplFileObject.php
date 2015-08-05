<?php

$file = new SplFileObject("SplFileObject.php");

foreach($file as $k => $line) {
    printf("%s => %s", $k, $line);
}

$content = iterator_to_array($file);

var_dump($content);