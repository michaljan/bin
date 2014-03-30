<?php
namespace Candidate\BoxPacker;

class DefineBox implements \Propcom\BoxPacker\Box{
    private $reference;
    private $outerWidth;
    private $outerLength;
    private $outerDepth;
    private $emptyWeight;
    private $innerWidth;
    private $innerLength;
    private $innerDepth;
    private $innerVolume;
    private $maxWeight;
    
    public function __construct(array $box) {
        $this->reference=$box[0];
        $this->outerWidth=$box[1];
        $this->outerLength=$box[2];
        $this->outerDepth=$box[3];
        $this->emptyWeight=$box[4];
        $this->innerWidth=$box[5];
        $this->innerLength=$box[6];
        $this->innerDepth=$box[7];
        $this->innerVolume=$box[8];
        $this->maxWeight=$box[9];
    }

    public function getReference(){
        return $this->reference;
    }

    public function getOuterWidth(){
        return $this->outerWidth;
    }
    
    public function getOuterLength(){
        return $this->outerLength;
    }

    public function getOuterDepth(){
        return $this->outerDepth;
    }

    public function getEmptyWeight(){
        return $this->emptyWeight;
    }
    
    public function getInnerWidth(){
        return $this->innerWidth;
    }

    public function getInnerLength(){
        return $this->innerLength;
    }   
    public function getInnerDepth(){
        return $this->innerDepth;
    }

    public function getInnerVolume(){
        return $this->innerVolume;
    }

    public function getMaxWeight(){
        return $this->maxWeight;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

