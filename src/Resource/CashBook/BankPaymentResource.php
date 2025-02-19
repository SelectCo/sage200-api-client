<?php

namespace Selectco\SageApi\Resource\CashBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\CashBook\BankPayment\PostBankPayment;

class BankPaymentResource
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
	public function postBankPayment(): Response
	{
		return $this->connector->send(new PostBankPayment());
	}
}
