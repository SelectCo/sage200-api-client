<?php

namespace Selectco\SageApi\Requests\Sales\SalesInvoices;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSalesInvoice
 *
 * Invoices are used to record a sale against a particular customer's account.<br /><br />Posting a
 * sales invoice does not actually create a 'sales invoice' entity, but a Posted Transaction of type
 * 'TradingAccountEntryTypeInvoice', therefore it is not possible to 'get' a sales invoice using the
 * same API endpoint after it has been posted. Posting a sales invoice returns a URN (Unique Reference
 * Number) that can be used to find the corresponding posted transaction.
 */
class PostSalesInvoice extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sales_invoices";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
