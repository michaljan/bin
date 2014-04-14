<?php
namespace Propcom\Implementation;
use Propcom\BoxPacker\Item as ItemInterface;

class Item implements ItemInterface
{
	/**
	 * Item SKU etc
	 * @return string
	 */
	public function getDescription();

	/**
	 * Item width in mm
	 * @return int
	 */
	public function getWidth();

	/**
	 * Item length in mm
	 * @return int
	 */
	public function getLength();

	/**
	 * Item depth in mm
	 * @return int
	 */
	public function getDepth();

	/**
	 * Item weight in g
	 * @return int
	 */
	public function getWeight();

	/**
	 * Item volume in mm^3
	 * @return int
	 */
	public function getVolume();

}
