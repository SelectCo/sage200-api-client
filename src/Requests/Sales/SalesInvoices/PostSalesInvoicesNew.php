<?php

namespace Selectco\SageApi\Requests\Sales\SalesInvoices;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSalesInvoicesNew
 *
 * Returns a sales invoice with all the default values for a customer. The API endpoint does not
 * persist the sales invoice.
 */
class PostSalesInvoicesNew extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sales_invoices_new";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
