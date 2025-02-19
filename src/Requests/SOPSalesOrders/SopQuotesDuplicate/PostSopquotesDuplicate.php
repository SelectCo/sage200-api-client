<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopQuotesDuplicate;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPQuotesDuplicate
 *
 * Returns a duplicate sales quote using the sales quote options specified.<p>This API endpoint creates
 * a draft sales quote which needs to be either:<ul><li>confirmed as a live quote by using the PUT
 * sop_quotes endpoint with the field 'is_editing' set to false</li><li>discarded using the DELETE
 * sop_quotes endpoint</li></ul></p>
 */
class PostSopquotesDuplicate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_quotes_duplicate";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
