<?php

namespace ChrisLondon\ForteApi\Models;

class ECheck
{
	const TYPE_CHECKING = 'checking';
	const TYPE_SAVINGS = 'savings';

	const SEC_ARC = 'ARC';
	const SEC_CCD = 'CCD';
	const SEC_CIE = 'CIE';
	const SEC_CTX = 'CTX';
	const SEC_POP = 'POP';
	const SEC_PPD = 'PPD';
	const SEC_RCK = 'RCK';
	const SEC_TEL = 'TEL';
	const SEC_WEB = 'WEB';

	/**
	 * The name of the account owner. This field is required when creating or updating a new record.
	 *
	 * @var string
	 */
	public $accountHolder;

	/**
	 * The DDA or eCheck account number. This field is required when creating or updating a new record and can only
	 * contain digits.
	 *
	 * @var string
	 */
	public $accountNumber;

	/**
	 * The transit routing number. This field is required when creating or updating a new record and can only contain
	 * digits.
	 * [max length = 9]
	 *
	 * @var string
	 * @maxLength 9
	 */
	public $routingNumber;

	/**
	 * Use one of the following values for this parameter:
	 *   Checking
	 *   Savings
	 *
	 * @var string
	 */
	public $accountType;

	/**
	 * The customer's check number. NOTE: This field is only available for transactions and is not included in the
	 * PayMethods object
	 *
	 * @var string
	 */
	public $checkNumber;

	/**
	 * This parameter captures the Standard Entry Class codes. Use one of the following values:
	 *   ARC = Accounts Receivable Entry
	 *   CIE = Customer-Initiated Entry
	 *   POP = Point-of-Purchase Entry
	 *   PPD = Prearranged Payment and Deposit Entry
	 *   RCK = Represented Check Entry
	 *   TEL = Telephone-Initiated Entry
	 *   WEB = Internet-Initiated Entry
	 *   CCD = Cash Concentration and Disbursement
	 *   CTX = Corporate Trade Exchange
	 *
	 * @var string
	 */
	public $secCode;
}