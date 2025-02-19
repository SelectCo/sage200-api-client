<?php

namespace Selectco\SageApi\Requests\Sales\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCustomer
 *
 * Customers are one of the most important entities within Sage 200 as they are associated to many
 * important resources within the application and underpin most of the main features (e.g. sales
 * orders, payment receipts, etc.).
 */
class PutCustomer extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/customers/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
