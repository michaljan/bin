<?php
namespace Candidate\BoxPacker;

class DeveloperTestPacker extends \Propcom\BoxPacker\BasePacker{

    public function addBox(DefineBox $box) {
        
    }

    public function addItem(DefineItem $item) {
        
    }

    public function pack() {
        
    }
    
    public function addBoxes(array $boxes) {
        //parent::addBoxes($boxes);
        foreach ($boxes as $box){
            addBox($box);
        }
        
    }
    
    public function addItems(array $items) {
        //parent::addItems($items);
        foreach ($items as $item){
            addItem($item);
            
        }
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

