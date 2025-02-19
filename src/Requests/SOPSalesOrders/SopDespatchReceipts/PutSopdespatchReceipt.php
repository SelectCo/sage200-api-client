<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopDespatchReceipts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSOPDespatchReceipt
 *
 * Update the despatch receipt tracking details.
 */
class PutSopdespatchReceipt extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the despatch receipt.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sop_despatch_receipts/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
