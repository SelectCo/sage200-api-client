<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSOPQuoteNew
 *
 * Sales quote are used to represent the quotation of the sale of goods or services to a customer. They
 * are central to a business and define the terms (price, quantity and times) by which the products or
 * services will be delivered.
 */
class PutSopquoteNew extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the sales quote.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sop_quotes_new/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
