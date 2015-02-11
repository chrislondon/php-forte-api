<?php

namespace ChrisLondon\ForteApi\Models;

class Address
{
	const TYPE_DEFAULT_BILLING  = 'default_billing';
	const TYPE_DEFAULT_SHIPPING = 'default_shipping';
	const TYPE_DEFAULT_NONE     = 'none';
	const TYPE_DEFAULT_BOTH     = 'both';

	/**
	 * A unique string used to represent an address. For example, add_tq0hemmmtf-zsxgq689rew.
	 *
	 * @var string
	 * @required
	 */
	public $addressToken;

	/**
	 * A unique string used to represent a customer. For example, cst_SoGUG6mcLUS1nVzYBIbk3g.
	 *
	 * @var string
	 * @required
	 */
	public $customerToken;

	/**
	 * The identification number of the associated account. For example, act_5551236.
	 *
	 * @var string
	 * @required
	 */
	public $accountId;

	/**
	 * The identification number of the associated location. For example, loc_1234568.
	 *
	 * @var string
	 * @required
	 */
	public $locationId;

	/**
	 * The status of the address
	 *
	 * @var string
	 */
	public $status;

	/**
	 * The first name of the user associated with this billing or shipping address
	 *
	 * @var string
	 * @maxLength 50
	 */
	public $firstName;

	/**
	 * The last name of the user associated with this billing or shipping address
	 *
	 * @var string
	 * @maxLength 50
	 */
	public $lastName;

	/**
	 * The name of the company associated with this billing or shipping address
	 *
	 * @var string
	 * @maxLength 50
	 */
	public $companyName;

	/**
	 * The phone number associated with this billing or shipping address
	 *
	 * @var string
	 * @maxLength 15
	 */
	public $phone;

	/**
	 * The fax number associated with this billing or shipping address
	 *
	 * @var string
	 */
	public $fax;

	/**
	 * The email address associated with this billing or shipping address
	 *
	 * @var string
	 * @maxLength 50
	 */
	public $email;

	/**
	 * A label that succinctly identifies the address. For example, "Work" or "Home."
	 *
	 * @var string
	 */
	public $label;

	/**
	 * The type of address. Use one of the following values:
	 *  a. default_billing - the default billing address
	 *  b. default_shipping - the default shipping address
	 *  c. none - the address is not a default address
	 *  d. both - the address is both a default shipping and default billing address
	 *
	 * @var string
	 */
	public $addressType;

	/**
	 * Indicates whether the address is a Residential (R) or Commercial (C) address.
	 *
	 * @var string
	 */
	public $shippingAddressType;

	/**
	 * @var PhysicalAddress
	 */
	public $physicalAddress;
}