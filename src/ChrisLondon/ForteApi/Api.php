<?php

namespace ChrisLondon\ForteApi;

use ChrisLondon\GenericApi\Api as GenericApi;
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

	public function __construct(Config $config)
	{
		$this->config = $config;

		$curlOptions = [
			CURLOPT_USERPWD => $config->getUserPwd()
		];

		$this->api = new GenericApi(new Curl($curlOptions), new Json);
	}
}