<?php

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Financials\TaxCodes\GetTaxCode;
use Selectco\SageApi\Requests\Financials\TaxCodes\GetTaxCodes;

class TaxCodesResource
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
	public function getTaxCodes(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetTaxCodes($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the tax code.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getTaxCode(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetTaxCode($id, $queryParameters));
	}
}
