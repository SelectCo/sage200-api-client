<?php

namespace Selectco\SageApi\Requests\CashBook\Banks;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostBank
 *
 * Bank accounts can be created in Sage 200 for any type of account that money is paid in/out of, for
 * example, cash, credit cards or, business current account. Bank accounts can be in any currency and
 * all balances are recorded in the currency specific to that bank account.
 */
class PostBank extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/banks";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
