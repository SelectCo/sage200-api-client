<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseInvoices;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPurchaseInvoicesNew
 *
 * Returns a purchase invoice with all the default values for a supplier. The API endpoint does not
 * persist the purchase invoice.
 */
class PostPurchaseInvoicesNew extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/purchase_invoices_new";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
