<?php

namespace Selectco\SageApi\Resource\PriceBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\PriceBook\PriceBookSettings\GetPriceBookSetting;
use Selectco\SageApi\Requests\PriceBook\PriceBookSettings\GetPriceBookSettings;

class PriceBookSettingsResource
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
	public function getPriceBookSettings(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPriceBookSettings($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Price Book settings.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPriceBookSetting(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPriceBookSetting($id, $queryParameters));
	}
}
