<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSOPExportReason
 *
 * Reason for SOP export.
 */
class DeleteSopexportReason extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the SOP reason for export.
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
