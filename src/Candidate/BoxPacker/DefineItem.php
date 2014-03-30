<?php
namespace Candidate\BoxPacker;

class DefineItem implements \Propcom\BoxPacker\Item{
    
    private $description;
    private $width;
    private $length;
    private $depth;
    private $weight;
    private $volume;

    public function __construct(array $item) {
        $this->description = $item[0];
        $this->width = $item[1];
        $this->length = $item[2];
        $this->depth = $item[3];
        $this->weight = $item[4];
        $this->volume = $item[5];
    }
    
    public function getDescription() {
        return $this->description;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getLength() {
        return $this->length;
    }

    public function getDepth() {
        return $this->depth;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getVolume() {
        return $this->volume;
    }

}