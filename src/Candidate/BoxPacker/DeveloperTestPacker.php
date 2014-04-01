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
                $item=new DefineItem($item);
                $itemsNo=0;
                $totalWeight=0;
                $totalVolume=0;
                if($box->getInnerDepth()>=$item->getDepth() && $box->getInnerLength()>=$item->getLength() && $box->getInnerWidth()>=$item->getWidth()){
                    while($box->getInnerVolume()<=$totalVolume){
                        if($box->getMaxWeight()<=$totalWeight){
                            $totalVolume=$totalVolume+($item->getVolume());
                            $totalWeight=$totalWeight+($item->getWeight());
                            $packedItems[$itemsNo]=array($item->getDescription(),$item->getDepth(),$item->getLength(),$item->getWidth());
                            $itemsNo++;
                        }
                        else{
                            $packedBox= new TestPackedBox($box, $packedItems, $totalWeight);
                            break;
                        }
                    }
                $packedBox= new TestPackedBox($box, $packedItems, $totalWeight);
                return $packedBox;
                }
                else{
                    echo 'box to small';
                    
                }
            }
        }
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

