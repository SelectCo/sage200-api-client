<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Sales\SalesCreditNotes\PostSalesCreditNote;
use Selectco\SageApi\Requests\Sales\SalesCreditNotes\PostSalesCreditNotesNew;

class SalesCreditNotesResource
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
	public function postSalesCreditNote(): Response
	{
		return $this->connector->send(new PostSalesCreditNote());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSalesCreditNotesNew(): Response
	{
		return $this->connector->send(new PostSalesCreditNotesNew());
	}
}
