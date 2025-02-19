<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Purchases\PurchaseCreditNotes\PostPurchaseCreditNote;
use Selectco\SageApi\Requests\Purchases\PurchaseCreditNotes\PostPurchaseCreditNotesNew;

class PurchaseCreditNotesResource
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
	public function postPurchaseCreditNote(): Response
	{
		return $this->connector->send(new PostPurchaseCreditNote());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postPurchaseCreditNotesNew(): Response
	{
		return $this->connector->send(new PostPurchaseCreditNotesNew());
	}
}
