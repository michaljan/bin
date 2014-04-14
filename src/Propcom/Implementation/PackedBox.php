<?php
namespace Propcom\Implementation;

use Propcom\BoxPacker\PackedBox as PackedBoxInterface;

/**
* A box that has been packed with items
*/
class PackedBox implements PackedBoxInterface
{
	/**
	 * Get box used
	 * @return Box
	 */
	public function getBox();

	/**
	 * Get items packed
	 * @return ItemList
	 */
	public function getItems();

	/**
	 * Get packed weight
	 * @return int weight in grams
	 */
	public function getWeight();

}
