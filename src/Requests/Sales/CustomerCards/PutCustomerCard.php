<?php

namespace Selectco\SageApi\Requests\Sales\CustomerCards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCustomerCard
 *
 * Customer cards are the credit cards used by the customer. They are created when a transaction is
 * made using an Online Card Provider. The description used for the card can be renamed, or the card
 * removed. Multiple cards can be associated with one account. The date and time that the card was last
 * used is also recorded.
 */
class PutCustomerCard extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer card.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/customer_cards/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
