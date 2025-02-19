<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSOPIncoterms
 *
 * Incoterms are used to provide a set of international rules for the interpretation of the most
 * commonly used trade terms in international SOP orders.
 */
class PutSopincoterms extends Request
{
	protected Method $method = Method::PUT;
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
