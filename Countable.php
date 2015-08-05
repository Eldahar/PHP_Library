<?php

class MyCountable implements Countable {

    protected $_myCount = 3;

    public function count() {
        return $this->_myCount;
    }

}

$countable = new MyCountable();
echo count($countable);
