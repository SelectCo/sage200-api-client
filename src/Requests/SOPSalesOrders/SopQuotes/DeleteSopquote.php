<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSOPQuote
 *
 * Sales quotes are used to represent the quotations of the sale of goods or services to a customer.
 * They are central to a business and define the terms (price, quantity and times) by which the
 * products or services will be delivered.
 */
class DeleteSopquote extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the sales quote.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sop_quotes/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
