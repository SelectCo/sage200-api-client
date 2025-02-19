<?php

namespace Selectco\SageApi\Resource\General;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\General\AnalysisCodeMappings\GetAnalysisCodeMapping;
use Selectco\SageApi\Requests\General\AnalysisCodeMappings\GetAnalysisCodeMappings;

class AnalysisCodeMappingsResource
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
	public function getAnalysisCodeMappings(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetAnalysisCodeMappings($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the analysis code mapping.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getAnalysisCodeMapping(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetAnalysisCodeMapping($id, $queryParameters));
	}
}
