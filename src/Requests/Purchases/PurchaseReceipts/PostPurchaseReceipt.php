<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseReceipts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPurchaseReceipt
 *
 * Receipts are used to record a supplier receipt against a particular supplier's account.<br /><br
 * />Posting a purchase receipt does not actually create a 'purchase receipt' entity, but a Posted
 * Transaction of type 'TradingAccountEntryTypePurchaseReceiptSalesPayment', therefore it is not
 * possible to 'get' a purchase receipt using the same API endpoint after it has been posted. Posting a
 * purchase receipt returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.<br /><br />Note: Before posting purchase receipts via the API, at least one bank
 * account must exist within Sage 200.
 */
class PostPurchaseReceipt extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/purchase_receipts";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
