<?php

namespace ChrisLondon\ForteApi\Models;

class Card
{
	const TYPE_VISA = 'visa';
	const TYPE_MAST = 'mast';
	const TYPE_AMEX = 'amex';
	const TYPE_DISC = 'disc';

	/**
	 * The type of credit card [max length = 6]. Options for this field include the following:
	 *  visa
	 *  mast
	 *  amex
	 *  disc
	 *
	 * @var string
	 * @required
	 * @maxLength 6
	 */
	public $cardType;

	/**
	 * The name printed on the on the credit card [max length = 50]. This field is required when creating a new record.
	 *
	 * @var string
	 * @maxLength 50
	 */
	public $nameOnCard;

	/**
	 * The card number. This field is required when creating a new record and can only contain digits
	 * [max length = 16].
	 *
	 * @var string
	 * @maxLength 16
	 */
	public $accountNumber;

	/**
	 * The expiration month. This field is required when creating a new record and must be a valid future date
	 * [max length = 2].
	 *
	 * @var string
	 * @maxLength = 2;
	 */
	public $expireMonth;

	/**
	 * The expiration year. This field is required when creating a new record and must be a valid future date
	 * [max length = 4].
	 *
	 * @var string
	 * @maxLength 4
	 */
	public $expireYear;

	/**
	 * The card verification number. Forte does not store this field with the pay method token, but echoes it back.
	 *
	 * @var string
	 */
	public $cardVerificationNumber;
}