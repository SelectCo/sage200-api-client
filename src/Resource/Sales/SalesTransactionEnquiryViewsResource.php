<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\SalesTransactionEnquiryViews\GetSalesTransactionEnquiryView;
use Selectco\SageApi\Requests\Sales\SalesTransactionEnquiryViews\GetSalesTransactionEnquiryViews;
use Selectco\SageApi\Requests\Sales\SalesTransactionEnquiryViews\GetSalesTransactionsEnquiryViewsForCustomer;

class SalesTransactionEnquiryViewsResource
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
	public function getSalesTransactionEnquiryViews(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesTransactionEnquiryViews($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesTransactionEnquiryView(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesTransactionEnquiryView($id, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesTransactionsEnquiryViewsForCustomer(
        float|int             $customerId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSalesTransactionsEnquiryViewsForCustomer($customerId, $queryParameters));
	}
}
