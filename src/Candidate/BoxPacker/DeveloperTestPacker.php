<?php
namespace Candidate\BoxPacker;

class DeveloperTestPacker{

    public function addBoxes($boxes) {
        foreach($boxes as $box){
            $defineBox= new \Candidate\BoxPacker\DefineBox($box);
            var_dump($defineBox->getInnerDepth());
        }
    }

    public function addItems($items) {
        
    }

    public function pack() {
        
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

