<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopAdditionalCharges\GetSopadditionalCharge;
use Selectco\SageApi\Requests\SOPSalesOrders\SopAdditionalCharges\GetSopadditionalCharges;

class SopAdditionalChargesResource
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
	public function getSopadditionalCharges(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopadditionalCharges($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the SOP additional charge.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSopadditionalCharge(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopadditionalCharge($id, $queryParameters));
	}
}
