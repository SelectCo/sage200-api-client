<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPQuotesNew
 *
 * Returns a sales quote with all the default values for a customer. The API endpoint does not persist
 * the sales quote.
 */
class PostSopquotesNew extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_quotes_new";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
