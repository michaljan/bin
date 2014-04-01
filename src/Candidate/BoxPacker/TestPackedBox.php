<?php
class TestPackedBox implements \Propcom\BoxPacker\PackedBox{
    private $box;
    private $items;
    private $weight;
    public function __construct($box,$packedItems,$weight) {
        $this->box=$box;
        $this->packedItems[]=$packedItems;
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

