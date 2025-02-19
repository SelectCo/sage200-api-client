<?php

namespace Selectco\SageApi\Requests\Sales\SalesPayments;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSalesPayment
 *
 * Payments are used to record a sales payment against a particular customer's account.<br /><br
 * />Posting a sales payment does not actually create a 'sales payment' entity, but a Posted
 * Transaction of type 'TradingAccountEntryTypePurchaseReceiptSalesPayment', therefore it is not
 * possible to 'get' a sales payment using the same API endpoint after it has been posted. Posting a
 * sales payment returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.<br /><br />Note: Before posting sales payments via the API, at least one bank
 * account must exist within Sage 200.
 */
class PostSalesPayment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sales_payments";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
