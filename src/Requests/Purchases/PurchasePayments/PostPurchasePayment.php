<?php

namespace Selectco\SageApi\Requests\Purchases\PurchasePayments;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPurchasePayment
 *
 * Payments are used to record a supplier payment against a particular supplier's account.<br /><br
 * />Posting a purchase payment does not actually create a 'purchase payment' entity, but a Posted
 * Transaction of type 'TradingAccountEntryTypePurchasePaymentSalesReceipt', therefore it is not
 * possible to 'get' a purchase payment using the same API endpoint after it has been posted. Posting a
 * purchase payment returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.<br /><br />Note: Before posting purchase payments via the API, at least one bank
 * account must exist within Sage 200.
 */
class PostPurchasePayment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/purchase_payments";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
