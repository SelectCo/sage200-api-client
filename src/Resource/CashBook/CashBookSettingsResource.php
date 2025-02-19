<?php

namespace Selectco\SageApi\Resource\CashBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\CashBook\CashBookSettings\GetCashBookSetting;
use Selectco\SageApi\Requests\CashBook\CashBookSettings\GetCashBookSettings;

class CashBookSettingsResource
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
	public function getCashBookSettings(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCashBookSettings($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Cash Book settings.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCashBookSetting(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCashBookSetting($id, $queryParameters));
	}
}
