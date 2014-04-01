<?php
class TestBackedBox implements \Propcom\BoxPacker\PackedBox{
    private $box;
    private $items;
    private $weight;
    public function __construct($box,$items,$weight) {
        $this->box=$box;
        $this->items[]=$items;
        $this->weight=$weight;
    }
    public function getWeight() {
        return $this->weight;
    }
    public function getBox() {
        return $this->box;
        
    }
    public function getItems() {
        return $this->items;
    }
    
}

