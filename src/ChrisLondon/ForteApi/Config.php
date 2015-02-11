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
		$this->accountId = $accountId;
		$this->locationId = $locationId;
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