<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\PurchaseLedgerSettings\GetPurchaseLedgerSetting;
use Selectco\SageApi\Requests\Purchases\PurchaseLedgerSettings\GetPurchaseLedgerSettings;
use Selectco\SageApi\Requests\Purchases\PurchaseLedgerSettings\PutPurchaseLedgerSetting;

class PurchaseLedgerSettingsResource
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
	public function getPurchaseLedgerSettings(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchaseLedgerSettings($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Purchase Ledger settings.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPurchaseLedgerSetting(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchaseLedgerSetting($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Purchase Ledger settings.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putPurchaseLedgerSetting(float|int $id): Response
	{
		return $this->connector->send(new PutPurchaseLedgerSetting($id));
	}
}
