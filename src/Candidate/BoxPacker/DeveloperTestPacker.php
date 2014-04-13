<?php
namespace Candidate\BoxPacker;

class DeveloperTestPacker{

    public $testBox=array();
    private $itemsNo;
    private $totalWeigh;
    private $totalVolume; 
    public function addBoxes($boxes) {
        $this->boxes=$boxes;
    }

    public function addItems($items) {
        $this->items=$items;
    }
    public function pack() {
        
        foreach ($this->boxes as $box){
            echo 'test';
            $box=new DefineBox($box);
            foreach($this->items as $item){
                $item=new DefineItem($item);
                $itemsNo=0;
                $totalWeight=0;
                $totalVolume=0; 
                if($box->getInnerDepth()>=$item->getDepth() && $box->getInnerLength()>=$item->getLength() && $box->getInnerWidth()>=$item->getWidth()){
                    while($box->getInnerVolume()>$totalVolume){
                        if($box->getMaxWeight()>$totalWeight){
                            $totalVolume=$totalVolume+($item->getVolume());
                            $totalWeight=$totalWeight+($item->getWeight());
                            $items[$itemsNo]=array($item->getDescription(),$item->getDepth(),$item->getLength(),$item->getWidth());
                            $itemsNo++;
                        }
                        else{
                            
                            $packedBox= new TestPackedBox($box, $items, $totalWeight);
                            $testBox[]=array($packedBox->getBox(),$packedBox->getItems(),$packedBox->getWeight());
                            continue 2;
                        }
                    }
                $packedBox= new TestPackedBox($box, $items, $totalWeight);
                $testBox[]=array($packedBox->getBox(),$packedBox->getItems(),$packedBox->getWeight());
                continue 1;
                }
                else{
                    echo 'box to small';
                    
                }
            }
        }
    return $testBox;
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

