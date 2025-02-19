<?php

namespace Selectco\SageApi\Requests\Purchases\Suppliers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSupplier
 *
 * Suppliers are one of the most important entities within Sage 200 as they are associated with many
 * important resources within the application and underpin most of the main features (e.g. purchase
 * orders, purchase receipts, etc.).
 */
class DeleteSupplier extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the supplier.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/suppliers/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
