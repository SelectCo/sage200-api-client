<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseInvoices;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPurchaseInvoice
 *
 * Invoices are used to record a purchase against a particular supplier's account.<br /><br />Posting a
 * purchase invoice does not actually create a 'purchase invoice' entity, but a Posted Transaction of
 * type 'TradingAccountEntryTypeInvoice', therefore it is not possible to 'get' a purchase invoice
 * using the same API endpoint after it has been posted. Posting a purchase invoice returns a URN
 * (Unique Reference Number) that can be used to find the corresponding posted transaction.
 */
class PostPurchaseInvoice extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/purchase_invoices";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
