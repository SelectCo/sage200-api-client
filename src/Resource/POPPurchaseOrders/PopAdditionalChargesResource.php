<?php

namespace Selectco\SageApi\Resource\POPPurchaseOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopAdditionalCharges\GetPopadditionalCharge;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopAdditionalCharges\GetPopadditionalCharges;

class PopAdditionalChargesResource
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
	public function getPopadditionalCharges(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPopadditionalCharges($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the POP additional charge.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPopadditionalCharge(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPopadditionalCharge($id, $queryParameters));
	}
}
