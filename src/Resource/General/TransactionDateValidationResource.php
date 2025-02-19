<?php

namespace Selectco\SageApi\Resource\General;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\General\TransactionDateValidation\PostTransactionDateValidation;

class TransactionDateValidationResource
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
	public function postTransactionDateValidation(): Response
	{
		return $this->connector->send(new PostTransactionDateValidation());
	}
}
