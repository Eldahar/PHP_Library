<?php

$queue = new SplQueue();
$queue->push(1);
$queue->push(2);
$queue->push(4);
$queue->push(3);
$queue->setIteratorMode(SplQueue::IT_MODE_DELETE);

foreach($queue as $k=>$v) {
    printf("%s => %s\n", $k, $v);
}