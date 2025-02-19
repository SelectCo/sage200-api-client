<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\ConsolidatedNominalCodes\GetConsolidatedNominalCode;
use Selectco\SageApi\Requests\Nominal\ConsolidatedNominalCodes\GetConsolidatedNominalCodes;

class ConsolidatedNominalCodesResource
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
	public function getConsolidatedNominalCodes(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetConsolidatedNominalCodes($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the consolidated nominal code.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getConsolidatedNominalCode(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetConsolidatedNominalCode($id, $queryParameters));
	}
}
