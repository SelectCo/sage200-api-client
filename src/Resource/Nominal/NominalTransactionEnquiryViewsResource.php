<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\NominalTransactionEnquiryViews\GetNominalTransactionEnquiryView;
use Selectco\SageApi\Requests\Nominal\NominalTransactionEnquiryViews\GetNominalTransactionEnquiryViews;
use Selectco\SageApi\Requests\Nominal\NominalTransactionEnquiryViews\GetNominalTransactionsEnquiryViewForNominal;

class NominalTransactionEnquiryViewsResource
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
	public function getNominalTransactionEnquiryViews(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalTransactionEnquiryViews($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getNominalTransactionEnquiryView(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalTransactionEnquiryView($id, $queryParameters));
	}


	/**
	 * @param float|int $nominalCodeId Unique Id of the nominal account.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getNominalTransactionsEnquiryViewForNominal(
        float|int             $nominalCodeId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetNominalTransactionsEnquiryViewForNominal($nominalCodeId, $queryParameters));
	}
}
