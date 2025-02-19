<?php

namespace Selectco\SageApi\Requests\Stock\WarehouseHoldings;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteWarehouseHolding
 *
 * Delete a single warehouse holding resource by supplying a warehouse holding Id.
 */
class DeleteWarehouseHolding extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the warehouse holding.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/warehouse_holdings/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
