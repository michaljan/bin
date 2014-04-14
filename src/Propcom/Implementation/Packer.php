<?php
namespace Propcom\Implementation;

use Propcom\BoxPacker\Packer as PackerInterface;

/**
* Provides packing functionality
*/
class Packer implements PackerInterface
{
	/**
	 * Adds an item to be packed
	 * @return $this
	 */
	public function addItem(Item $item);

	/**
	 * Adds a box for items to be packed into
	 * @return $this
	 */
	public function addBox(Box $box);

	/**
	 * Does the packing
	 * @return PackedBox[] An array of PackedBox objects
	 */
	public function pack();

}
