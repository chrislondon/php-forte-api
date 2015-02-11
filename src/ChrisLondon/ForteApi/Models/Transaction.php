<?php

namespace ChrisLondon\ForteApi\Models;

class Transaction
{
	const ACTION_SALE      = 'sale';
	const ACTION_AUTHORIZE = 'authorize';
	const ACTION_DISBURSE  = 'disburse';
	const ACTION_VOID      = 'void';
	const ACTION_CAPTURE   = 'capture';
	const ACTION_INQUIRY   = 'inquiry';
	const ACTION_VERIFY    = 'verify';

	const SEC_ARC = 'ARC';
	const SEC_CCD = 'CCD';
	const SEC_CIE = 'CIE';
	const SEC_CTX = 'CTX';
	const SEC_POP = 'POP';
	const SEC_POS = 'POS';
	const SEC_PPD = 'PPD';
	const SEC_RCK = 'RCK';
	const SEC_TEL = 'TEL';
	const SEC_WEB = 'WEB';

	/**
	 * The identification number of the associated account. For example, act_5551236.
	 *
	 * @var string
	 * @required
	 */
	public $accountId;

	/**
	 * The merchant's six-digit ID code.
	 *
	 * @var string
	 * @required
	 */
	public $locationId;

	/**
	 * The supported transaction types include the following values:
	 *   sale - Creates an ad-hoc or token transaction that will settle at the end of the day
	 *   authorize - authorizes the payment method, but does not create a transaction
	 *   disburse - creates a credit transaction that gives funds back to the customer (e.g., chargeback)
	 *   void - voids the unsettled transaction. Attempts to void settled transactions will be declined.
	 *   capture - authorizes the payment method and creates a transaction that will settle at the end of the day
	 *   inquiry - Requests the available balance from a card. NOTE: This action is only for merchant accounts approved
	 *             to process partial authorization transactions.
	 *   verify - The transaction is verified but no authorization is obtained and it cannot be settled. Used in
	 *            conjunction with Forte Verify.
	 *
	 * @var string
	 * @required
	 */
	public $action;

	/**
	 * A single use token generated by Forte.js.
	 *
	 * @var string
	 */
	public $oneTimeToken;

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
	 * A merchant-defined string that identifies the transaction.
	 *
	 * @var string
	 */
	public $referenceId;

	/**
	 * The amount to be charged/credited to the customer.
	 *
	 * @var string
	 */
	public $authorizationAmount;

	/**
	 * A merchant-assigned ID code that is returned with the transaction response.
	 *
	 * @var string
	 */
	public $orderId;

	/**
	 * The trace number returned by the original transaction.
	 *
	 * @var string
	 */
	public $originalTransactionId;

	/**
	 * A 36-character code that uniquely identifies the transaction.
	 *
	 * @var string
	 */
	public $transactionId;

	/**
	 * An approval code from a vendor that authorizes a merchant to void a transaction.
	 *
	 * @var string
	 */
	public $authorizationCode;

	/**
	 * The version number of the software used to create the transaction.
	 *
	 * @var string
	 */
	public $softwareName;

	/**
	 * The name or the ID of the person entering the data.
	 *
	 * @var string
	 */
	public $enteredBy;

	/**
	 * The date the merchant received the transaction
	 *
	 * @var string
	 */
	public $receivedDate;

	/**
	 * The date the funds go to the bank
	 *
	 * @var string
	 */
	public $originationDate;

	/**
	 * The accounting code for procurement card transactions.
	 *
	 * @var string
	 */
	public $customerAccountingCode;

	/**
	 * The sales tax amount. This field is only required for procurement card transactions.
	 *
	 * @var string
	 */
	public $salesTaxAmount;

	/**
	 * The calculated service fee for this transaction
	 *
	 * @var string
	 */
	public $serviceFeeAmount;

	/**
	 * Use one of the following values for this standard-entry class code: ARC, CCD, CIE, CTX, POP, POS, PPD, RCK, TEL, WEB
	 *
	 * @var string
	 */
	public $secCode;

	/**
	 * The Customer Object
	 *
	 * @var Customer
	 */
	public $customer;

	/**
	 * The PayMethod Object. This parameter can be included in either the transaction object or the customer object, but not within both objects.
	 *
	 * @var PayMethod
	 */
	public $payMethod;
}