<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSOPIncoterm
 *
 * Incoterms are used to provide a set of international rules for the interpretation of the most
 * commonly used trade terms in international SOP orders.
 */
class DeleteSopincoterm extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the SOP Incoterm.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sop_incoterms/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
