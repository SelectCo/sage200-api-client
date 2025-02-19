<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Purchases\PurchaseInvoices\PostPurchaseInvoice;
use Selectco\SageApi\Requests\Purchases\PurchaseInvoices\PostPurchaseInvoicesNew;

class PurchaseInvoicesResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postPurchaseInvoice(): Response
	{
		return $this->connector->send(new PostPurchaseInvoice());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postPurchaseInvoicesNew(): Response
	{
		return $this->connector->send(new PostPurchaseInvoicesNew());
	}
}
