<?php

/* Register a basic autoloader */
require_once 'AutoLoader.php';
AutoLoader::register('src');

/* Create a packer */
$packer = new \Candidate\BoxPacker\DeveloperTestPacker();

/* Create some test boxes */
$boxes[] =array('box1', 100, 100, 100, 10, 95, 95, 95, 95*95*95, 100);
$boxes[] =array('box2', 150, 150, 150, 10, 145, 145, 145, 145*145*145, 150);
$boxes[] =array('box3', 200, 200, 200, 10, 195, 195, 195, 195*195*195, 200);
/* Add boxes to packer */
$packer->addBoxes($boxes);

/* Create some test items */
$items[]=array('item1', 5, 5, 5, 10,5*5*5);
$items[]=array('item1', 10, 10, 10, 20,10*10*10);
$items[]=array('item1', 20, 20, 20, 30,20*20*20);
// Create your items here

/* Add items to packer */
$packer->addItems($items);

/* Pack */
$packed_boxes = $packer->pack();

/* Output - var_dump is fine */
var_dump($packed_boxes);
