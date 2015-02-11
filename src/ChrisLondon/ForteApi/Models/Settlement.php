<?php

namespace ChrisLondon\ForteApi\Models;

class Settlement
{
	const TYPE_DEPOSIT    = 'deposit';
	const TYPE_REJECT     = 'reject';
	const TYPE_WITHDRAWAL = 'withdrawal';

	const METHOD_ECHECK = 'echeck';
	const METHOD_CC     = 'cc';
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
	 * A merchant-defined string.
	 *
	 * @var string
	 */
	public $orderNumber;

	/**
	 * A merchant-defined string that identifies the transaction.
	 *
	 * @var string
	 */
	public $referenceId;

	/**
	 * The settlement ID of the settled transaction (e.g., stl_51cf4633-1767-484f-8784-be76a4076791)
	 *
	 * @var string
	 * @required
	 */
	public $settleId;

	/**
	 * A 36-character code that uniquely identifies the transaction.
	 *
	 * @var string
	 */
	public $transactionId;

	/**
	 * The date when the transaction was settled.
	 *
	 * @var string
	 */
	public $settleDate;

	/**
	 * The type of settlement. Supported settlement types include the following values.
	 *
	 * For echeck transactions:
	 *   deposit
	 *   reject
	 *   withdrawal
	 *
	 * For credit card transactions:
	 *   deposit
	 *   withdrawal
	 *
	 * @var string
	 */
	public $settleType;

	/**
	 * See the Response Codes table for more information.
	 *
	 * @var string
	 */
	public $settleResponseCode;

	/**
	 * The amount the transaction settled for.
	 *
	 * @var string
	 */
	public $settleAmount;

	/**
	 * The payment method. The supported payment methods include the following values:
	 *   echeck
	 *   cc
	 *
	 * @var string
	 */
	public $method;
}