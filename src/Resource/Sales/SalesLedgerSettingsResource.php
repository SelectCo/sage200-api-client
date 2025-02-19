<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\SalesLedgerSettings\GetSalesLedgerSetting;
use Selectco\SageApi\Requests\Sales\SalesLedgerSettings\GetSalesLedgerSettings;
use Selectco\SageApi\Requests\Sales\SalesLedgerSettings\PutSalesLedgerSetting;

class SalesLedgerSettingsResource
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
	public function getSalesLedgerSettings(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesLedgerSettings($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Sales Ledger settings.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesLedgerSetting(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesLedgerSetting($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Sales Ledger settings.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSalesLedgerSetting(float|int $id): Response
	{
		return $this->connector->send(new PutSalesLedgerSetting($id));
	}
}
