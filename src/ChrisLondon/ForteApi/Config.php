<?php

namespace ChrisLondon\ForteApi;

class Config
{
	protected $baseUrl = 'https://sandbox.forte.net/api/v1';
	protected $loginId;
	protected $secureTransactionKey;

	public function __construct($loginId, $secureTransactionKey) {
		$this->loginId = $loginId;
		$this->secureTransactionKey = $secureTransactionKey;
	}

	public function getUserPwd()
	{
		return $this->loginId . ':' . $this->secureTransactionKey;
	}

}