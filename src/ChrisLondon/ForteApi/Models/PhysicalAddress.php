<?php

namespace ChrisLondon\ForteApi\Models;

class PhysicalAddress
{
	/**
	 * The first line of the street address
	 *
	 * @var string
	 * @maxLength 35
	 */
	public $streetLine1;

	/**
	 * The second line of the street address
	 *
	 * @var string
	 * @maxLength 35
	 */
	public $streetLine2;

	/**
	 * Locality or city/town/village
	 *
	 * @var string
	 * @maxLength 25
	 */
	public $locality;

	/**
	 * Region or state/province
	 *
	 * @var string
	 * @maxLength 2
	 */
	public $region;

	/**
	 * Postal Code
	 *
	 * @var string
	 * @maxLength 15
	 */
	public $postal_code;
}