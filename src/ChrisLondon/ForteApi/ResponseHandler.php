<?php

namespace ChrisLondon\ForteApi;

use ChrisLondon\GenericApi\Exception\InvalidResponse;
use ChrisLondon\GenericApi\Response;
use ChrisLondon\GenericApi\ResponseAbstract;

class ResponseHandler extends ResponseAbstract
{
	public function parse(Response $response)
	{
		$data = json_decode($response->getData());

		if ($response === null) {
			throw new InvalidResponse('Unable to parse response');
		}

		if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
			$this->errorCode = $response->getStatusCode();
			$this->errorMessage = $data->response->response_desc;
		}

		$this->data = $data->response;

		return $this;
	}
}