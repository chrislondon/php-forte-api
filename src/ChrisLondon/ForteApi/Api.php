<?php

namespace ChrisLondon\ForteApi;

use ChrisLondon\GenericApi\Api as GenericApi;
use ChrisLondon\GenericApi\Endpoint;
use ChrisLondon\GenericApi\RequestHandler\Curl;

class Api
{
	/**
	 * @var Config
	 */
	protected $config;

	/**
	 * @var GenericApi
	 */
	protected $api;

	/**
	 * @var Endpoint
	 */
	protected $endpoint;


	/**
	 * @param Config $config
	 */
	public function __construct(Config $config)
	{
		$this->config = $config;

		$curlOptions = [
			CURLOPT_USERPWD => $config->getUserPwd(),
			CURLOPT_HTTPHEADER => [
				'X-Forte-Auth-Account-Id: ' . $config->getAccountId()
			]
		];

		$this->api = new GenericApi(new Curl($curlOptions), new ResponseHandler);

		$this->endpoint = new Endpoint(
			$config->getBaseUri() . '/' . $this->getEndPointUri(),
			$this->api
		);
	}

	public function getEndPointUri()
	{
		throw new \Exception('getEndPointUri function not initiated');
	}
}