<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\FinanceCharges\GetFinanceCharge;
use Selectco\SageApi\Requests\Sales\FinanceCharges\GetFinanceCharges;
use Selectco\SageApi\Requests\Sales\FinanceCharges\PutFinanceCharge;

class FinanceChargesResource
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
	public function getFinanceCharges(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetFinanceCharges($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Finance charge.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getFinanceCharge(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetFinanceCharge($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Finance charge.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putFinanceCharge(float|int $id): Response
	{
		return $this->connector->send(new PutFinanceCharge($id));
	}
}
