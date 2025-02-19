<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\PurchaseTransactionEnquiryViews\GetPurchaseTransactionEnquiryView;
use Selectco\SageApi\Requests\Purchases\PurchaseTransactionEnquiryViews\GetPurchaseTransactionEnquiryViews;
use Selectco\SageApi\Requests\Purchases\PurchaseTransactionEnquiryViews\GetPurchaseTransactionsEnquiryViewsForSupplier;

class PurchaseTransactionEnquiryViewsResource
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
	public function getPurchaseTransactionEnquiryViews(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchaseTransactionEnquiryViews($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPurchaseTransactionEnquiryView(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchaseTransactionEnquiryView($id, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPurchaseTransactionsEnquiryViewsForSupplier(
        float|int             $supplierId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetPurchaseTransactionsEnquiryViewsForSupplier($supplierId, $queryParameters));
	}
}
