<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerPeriodValueViews\GetCustomerPeriodValueViews;

class CustomerPeriodValueViewsResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerPeriodValueViews(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerPeriodValueViews($queryParameters));
	}
}
