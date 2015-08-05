<?php

$info = new SplFileInfo('SplFileInfo.php');

printf("Extension: %s\n", $info->getExtension());
printf("Filename: %s\n", $info->getFilename());
printf("Path: %s\n", $info->getPathname());
printf("RealPath: %s\n", $info->getRealPath());
printf("Type: %s\n", $info->getType());
printf("Size: %s\n", $info->getSize());
printf("Dir: %b, Exec: %b, File: %b, Link: %b, R: %b, W: %b\n", $info->isDir(), $info->isExecutable(), $info->isFile(), $info->isLink(), $info->isReadable(), $info->isWritable());
$file = $info->openFile('r');
foreach($file as $line) {
    printf("%s", $line);
}

