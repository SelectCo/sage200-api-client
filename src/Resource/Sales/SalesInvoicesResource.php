<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Sales\SalesInvoices\PostSalesInvoice;
use Selectco\SageApi\Requests\Sales\SalesInvoices\PostSalesInvoicesNew;

class SalesInvoicesResource
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
	public function postSalesInvoice(): Response
	{
		return $this->connector->send(new PostSalesInvoice());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSalesInvoicesNew(): Response
	{
		return $this->connector->send(new PostSalesInvoicesNew());
	}
}
