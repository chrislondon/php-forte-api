<?php

namespace ChrisLondon\ForteApi;

class Config
{
	protected $baseUrl = 'https://sandbox.forte.net/api/v1';
	protected $loginId;
	protected $secureTransactionKey;
	protected $accountId;
	protected $locationId;

	public function __construct($loginId, $secureTransactionKey, $accountId, $locationId) {
		$this->loginId = $loginId;
		$this->secureTransactionKey = $secureTransactionKey;
		$this->accountId = 'acc_' . $accountId;
		$this->locationId = 'loc_' . $locationId;
	}

	public function getAccountId()
	{
		return $this->accountId;
	}

	public function getUserPwd()
	{
		return $this->loginId . ':' . $this->secureTransactionKey;
	}

	public function getBaseUri()
	{
		return $this->baseUrl . '/accounts/' . $this->accountId . '/locations/' . $this->locationId;
	}
}