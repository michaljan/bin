<?php
namespace Propcom\Implementation;

use Propcom\BoxPacker\BasePacker as AbstractBasePacker;


/**
* A class that provides a base for packing functionality
*/
class BasePacker extends AbstractBasePacker
{
    
        protected $itmes=array();
        protected $boxes=array();
        protected $packedBox=array();
        
        /**
	 * Adds an item to be packed
	 * @return $this
	 */
        public function addItem(Item $item)
        {
            $this->items[]=$item;
            return $this;
        }

	/**
	 * Adds a box for items to be packed into
	 * @return $this
	 */
        public function addBox(Box $box)
        {
            $this->boxes[]=$box;
            return $this;
        }

	/**
	 * Does the packing
	 * @return PackedBox[] An array of PackedBox objects
	 */
	public function pack();

	/**
	 * Adds multiple items to be packed
	 * @param Item[]
	 * @return $this
	 */
	public function addItems(array $items)
	{
		foreach ($items as $item) {
			if ( ! ($item instanceof Item)) {
				throw new UnexpectedValueException("Item is not an instance of \Propcom\BoxPacker\Item");
			}

			$this->addItem($item);
		}

		return $this; // For chaining
	}

	/**
	 * Adds multiple boxes for items to be packed into
	 * @param Box[]
	 * @return $this
	 */
	public function addBoxes(array $boxes)
	{
		foreach ($boxes as $box) {
			if ( ! ($box instanceof Box)) {
				throw new UnexpectedValueException("Box is not an instance of \Propcom\BoxPacker\Box");
			}

			$this->addBox($item);
		}

		return $this; // For chaining
	}

}
