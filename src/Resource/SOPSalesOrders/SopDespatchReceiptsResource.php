<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopDespatchReceipts\GetSopdespatchReceipt;
use Selectco\SageApi\Requests\SOPSalesOrders\SopDespatchReceipts\GetSopdespatchReceipts;
use Selectco\SageApi\Requests\SOPSalesOrders\SopDespatchReceipts\PutSopdespatchReceipt;

class SopDespatchReceiptsResource
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
	public function getSopdespatchReceipts(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopdespatchReceipts($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the SOP Despatch Receipt.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSopdespatchReceipt(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopdespatchReceipt($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the despatch receipt.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSopdespatchReceipt(float|int $id): Response
	{
		return $this->connector->send(new PutSopdespatchReceipt($id));
	}
}
