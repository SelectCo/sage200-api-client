<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPIncoterms
 *
 * Incoterms are used to provide a set of international rules for the interpretation of the most
 * commonly used trade terms in international SOP orders.
 */
class PostSopincoterms extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_incoterms";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
