<?php

namespace ChrisLondon\ForteApi;

use ChrisLondon\ForteApi\Models\Customer;

class Customers extends Api
{
	public function get($customerId = null)
	{
		return $this->endpoint->get();
	}

	public function post(Customer $customer)
	{

	}

	public function put(Customer $customer)
	{

	}

	public function delete($customerId)
	{

	}

	public function getEndPointUri()
	{
		return 'customers';
	}
}