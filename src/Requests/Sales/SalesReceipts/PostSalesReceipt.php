<?php

namespace Selectco\SageApi\Requests\Sales\SalesReceipts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSalesReceipt
 *
 * Receipts are used to record a sales receipt against a particular customer's account.<br /><br
 * />Posting a sales receipt does not actually create a 'sales receipt' entity, but a Posted
 * Transaction of type 'TradingAccountEntryTypePurchasePaymentSalesReceipt', therefore it is not
 * possible to 'get' a sales receipt using the same API endpoint after it has been posted. Posting a
 * sales receipt returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.<br /><br />Note: Before posting sales receipts via the API, at least one bank
 * account must exist within Sage 200.
 */
class PostSalesReceipt extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sales_receipts";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
