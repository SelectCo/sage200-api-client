<?php

namespace Selectco\SageApi\Requests\Sales\Customers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCustomer
 *
 * Customers are one of the most important entities within Sage 200 as they are associated to many
 * important resources within the application and underpin most of the main features (e.g. sales
 * orders, payment receipts, etc.).
 */
class PostCustomer extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/customers";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
