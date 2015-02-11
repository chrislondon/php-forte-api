<?php

namespace ChrisLondon\ForteApi\Models;

class Customer
{
	const STATUS_ACTIVE = 'active';
	const STATUS_SUSPENDED = 'suspended';

	/**
	 * The identification number of the associated Home Account. For example, act_5551236.
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
	 * A unique string used to represent a customer. For example, cst_SoGUG6mcLUS1nVzYBIbk3g. [max length = 26]
	 *
	 * @var string
	 * @maxLength 26
	 */
	public $customerToken;

	/**
	 * A merchant-defined string created at the customer level to identify the customer.
	 *
	 * @var string
	 */
	public $customerId;

	/**
	 * The customer's default pay method token. The system returns this token when creating a customer with a billing
	 * address.
	 *
	 * @var string
	 */
	public $defaultPayMethodToken;

	/**
	 * A unique string used to represent the customer's default billing address. The system returns this token when
	 * creating a customer with a billing address.
	 *
	 * @var string
	 */
	public $defaultBillingAddressToken;

	/**
	 * A unique string used to represent a customer's default shipping address. This system returns this token when
	 * creating a customer with a shipping address.
	 *
	 * @var string
	 */
	public $defaultShippingAddressToken;

	/**
	 * Use one of the following values:
	 *  a. active
	 *  b. suspended [max length = 1]
	 *
	 * @var string
	 * @maxLength 1
	 */
	public $status;

	/**
	 * The first name of the customer. [max length = 50]
	 *
	 * @var string
	 * @required
	 * @maxLength 50
	 */
	public $firstName;

	/**
	 * The last name of the customer. [max length = 50]
	 *
	 * @var string
	 * @required
	 * @maxLength 50
	 */
	public $lastName;

	/**
	 * The company name of the customer. [max length = 50]
	 *
	 * @var string
	 * @maxLength 50
	 */
	public $companyName;

	/**
	 * The PayMethod Object
	 *
	 * @var PayMethod
	 */
	public $payMethod;

	/**
	 * An array of Address Objects
	 *
	 * @var Address[]
	 */
	public $addresses;
}