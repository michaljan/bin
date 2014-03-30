<?php
namespace Candidate\BoxPacker;

class DeveloperTestPacker{

    public function addBoxes($boxes) {
        $this->boxes=$boxes;
    }

    public function addItems($items) {
        $this->items=$items;
    }

    public function pack() {
        foreach ($this->boxes as $box){
            $box=new DefineBox($box);
            foreach($this->items as $item){
                var_dump($item);
            }
            var_dump($box);
        }
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

