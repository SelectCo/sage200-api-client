<?php

namespace Selectco\SageApi\Requests\CashBook\Banks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteBank
 *
 * Bank accounts can be created in Sage 200 for any type of account that money is paid in/out of, for
 * example, cash, credit cards or, business current account. Bank accounts can be in any currency and
 * all balances are recorded in the currency specific to that bank account.
 */
class DeleteBank extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the bank.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/banks/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
