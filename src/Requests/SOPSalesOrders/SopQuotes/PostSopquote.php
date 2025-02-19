<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPQuote
 *
 * Sales quotes are used to represent the quotation of a sale of goods or services to a customer. They
 * are central to a business and define the terms (price, quantity and times) by which the products or
 * services will be delivered.
 */
class PostSopquote extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_quotes";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
