<?php

namespace Selectco\SageApi\Resource\General;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\General\SystemSettings\GetSystemSetting;
use Selectco\SageApi\Requests\General\SystemSettings\GetSystemSettings;
use Selectco\SageApi\Requests\General\SystemSettings\PutSystemSetting;

class SystemSettingsResource
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
	public function getSystemSettings(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSystemSettings($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the system settings.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSystemSetting(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSystemSetting($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the system settings.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSystemSetting(float|int $id): Response
	{
		return $this->connector->send(new PutSystemSetting($id));
	}
}
