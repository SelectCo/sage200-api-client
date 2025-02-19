<?php

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Financials\FinancialReportRowLayoutDebitOrCreditTypes\GetFinancialReportRowLayoutDebitOrCreditTypes;

class FinancialReportRowLayoutDebitOrCreditTypesResource
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
	public function getFinancialReportRowLayoutDebitOrCreditTypes(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetFinancialReportRowLayoutDebitOrCreditTypes($queryParameters));
	}
}
