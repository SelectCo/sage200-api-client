<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSOPExportReason
 *
 * The reason for exporting the SOP order line to the customer.
 */
class PutSopexportReason extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the export reason.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sop_export_reasons/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
