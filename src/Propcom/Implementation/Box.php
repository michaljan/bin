<?php
namespace Propcom\Implementation;

use Propcom\BoxPacker\Box as BoxInterface;


class Box implements BoxInterface
{	
	protected $outerWidth=null;
        protected $outerLength=null;
        protected $outerDepth=null;
        protected $omptyWeight=null;
        protected $onnerWidth=null;
        protected $innerLength=null;
        protected $innerDepth=null;
        protected $innerVolume=null;
        protected $maxWeight=null;
        protected $reference=null;           

    /**
	 * Reference for box type (e.g. SKU or description)
	 * @return string
	 */
	public function getReference();

	/**
	 * Outer width in mm
	 * @return int
	 */
	public function getOuterWidth();

	/**
	 * Outer length in mm
	 * @return int
	 */
	public function getOuterLength();

	/**
	 * Outer depth in mm
	 * @return int
	 */
	public function getOuterDepth();

	/**
	 * Empty weight in g
	 * @return int
	 */
	public function getEmptyWeight();

	/**
	 * Inner width in mm
	 * @return int
	 */
	public function getInnerWidth();

	/**
	 * Outer length in mm
	 * @return int
	 */
	public function getInnerLength();

	/**
	 * Outer depth in mm
	 * @return int
	 */
	public function getInnerDepth();

	/**
	 * Total inner volume of packing in mm^3
	 * @return int
	 */
	public function getInnerVolume();

	/**
	 * Max weight the packaging can hold in g
	 * @return int
	 */
	public function getMaxWeight();

}
