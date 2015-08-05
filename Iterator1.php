<?php

class MyIterator implements Iterator {

    protected $datas;
    protected $currentKey;

    public function __construct(array $datas) {
        $this->datas = $datas;
        $this->currentKey = key($this->datas);
    }

    /**
     * Aktuális érték
     */
    public function current() {
        return $this->datas[$this->currentKey];
    }

    /**
     * ugrás a következő értékre
     */
    public function next() {
        next($this->datas);
        $this->currentKey = key($this->datas);
    }

    /**
     * Aktuális kulcs
     */
    public function key() {
        return $this->currentKey;
    }

    /**
     * Valid e még a helyzetünk?
     *
     * Ha ez egyszer false értéked ad vissza, akkor a foreach nem megy tovább
     */
    public function valid() {
        if(!isset($this->datas[$this->currentKey])) {
            return false;
        }
        return 5 > $this->current();
    }

    /**
     * Vissza az elejére
     */
    public function rewind() {
        reset($this->datas);
        $this->currentKey = key($this->datas);
    }

}

$d = new MyIterator([1,2,3,4,5,6,7,2,1,0]);

foreach($d as $key=>$value) {
    echo sprintf("%s => %s\n", $key, $value);
}

