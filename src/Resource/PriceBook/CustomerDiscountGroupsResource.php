<?php

namespace Selectco\SageApi\Resource\PriceBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\PriceBook\CustomerDiscountGroups\GetCustomerDiscountGroup;
use Selectco\SageApi\Requests\PriceBook\CustomerDiscountGroups\GetCustomerDiscountGroups;

class CustomerDiscountGroupsResource
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
	public function getCustomerDiscountGroups(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerDiscountGroups($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer discount group.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerDiscountGroup(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerDiscountGroup($id, $queryParameters));
	}
}
