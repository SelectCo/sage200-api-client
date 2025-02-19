<?php

namespace Selectco\SageApi\Requests\Sales\CustomerPriceEnquiry;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCustomerPriceEnquiry
 *
 * Returns the price of a product, and any available discount, for the specified customer. This
 * includes any discounts based on the quantity specified. In Sage 200, product prices are set on price
 * bands and then linked to customer accounts. Discounts are set per product, or product group and then
 * linked to customer accounts.
 */
class PostCustomerPriceEnquiry extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/customer_price_enquiry";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
