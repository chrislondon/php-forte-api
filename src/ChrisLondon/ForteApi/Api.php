<?php

namespace ChrisLondon\ForteApi;

use ChrisLondon\GenericApi\Api as GenericApi;
use ChrisLondon\GenericApi\Endpoint;
use ChrisLondon\GenericApi\RequestHandler\Curl;
use ChrisLondon\GenericApi\ResponseHandler\Json;

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
			CURLOPT_USERPWD => $config->getUserPwd()
		];

		$this->api = new GenericApi(new Curl($curlOptions), new Json);

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