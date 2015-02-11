<?php

namespace ChrisLondon\ForteApi;

use ChrisLondon\ForteApi\Models\PayMethod;
use ChrisLondon\GenericApi\Options;

class PayMethods extends Api
{
	public function get($accountId, $locationId, $payMethodId = null)
	{
		$options = (new Options())
			->setUri("/accounts/$accountId/locations/$locationId");

		$this->api->get($options);
	}

	public function post($accountId, $locationId, PayMethod $payMethod)
	{
		$options = (new Options())
			->setUri("/accounts/$accountId/locations/$locationId")
			->setPayload($payMethod->getPayload());

		$this->api->post($options);
	}

	public function put($accountId, $locationId, PayMethod $payMethod)
	{
		$options = (new Options())
			->setUri("/accounts/$accountId/locations/$locationId/paymethods/" . $payMethod->id)
			->setPayload($payMethod->getPayload());

		$this->api->put($options);

	}

	public function delete($accountId, $locationId, $payMethodId)
	{
		$options = (new Options())
			->setUri("/accounts/$accountId/locations/$locationId/paymethods/$payMethodId");

		$this->api->delete($options);
	}

}