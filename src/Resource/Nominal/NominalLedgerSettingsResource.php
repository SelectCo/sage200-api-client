<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\NominalLedgerSettings\GetNominalLedgerSetting;
use Selectco\SageApi\Requests\Nominal\NominalLedgerSettings\GetNominalLedgerSettings;

class NominalLedgerSettingsResource
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
	public function getNominalLedgerSettings(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalLedgerSettings($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Nominal Ledger settings.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getNominalLedgerSetting(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalLedgerSetting($id, $queryParameters));
	}
}
