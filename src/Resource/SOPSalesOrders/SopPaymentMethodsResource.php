<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopPaymentMethods\GetSoppaymentMethod;
use Selectco\SageApi\Requests\SOPSalesOrders\SopPaymentMethods\GetSoppaymentMethods;

class SopPaymentMethodsResource
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
	public function getSoppaymentMethods(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSoppaymentMethods($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the SOP payment method.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSoppaymentMethod(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSoppaymentMethod($id, $queryParameters));
	}
}
