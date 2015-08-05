<?php

$file = new SplFileObject('csvfile.csv');
$file->setCsvControl(';');
$file->setFlags(SplFileObject::READ_CSV);

foreach($file as $line) {
    var_dump($line);
}