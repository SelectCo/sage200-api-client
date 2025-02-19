<?php

namespace Selectco\SageApi\Requests\Sales\SalesAllocations;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSalesAllocation
 *
 * Sales transactions can be allocated against each other i.e. receipts against invoices.<br /><br
 * />This API resource can be used to determine which allocations are to be made.
 */
class PostSalesAllocation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sales_allocations";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
