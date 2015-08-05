<?php

class MyFilter extends FilterIterator {
    public function accept() {
        return $this->current() > 5;
    }
}

function test1() {
    $data = range(1, 10);

    $array = new ArrayObject($data);
    $i = new MyFilter($array->getIterator());

    foreach ($i as $k => $v) {
        printf("%s => %s\n", $k, $v);
    }

    var_dump($array->getArrayCopy());
    var_dump(iterator_to_array($i));
}

test1();