<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Sales\CustomerPriceEnquiry\PostCustomerPriceEnquiry;

class CustomerPriceEnquiryResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerPriceEnquiry(): Response
	{
		return $this->connector->send(new PostCustomerPriceEnquiry());
	}
}
