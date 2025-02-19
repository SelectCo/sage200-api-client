<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSOPExportReasons
 *
 * The reasons for exporting the SOP order line to the customer.
 */
class PutSopexportReasons extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_export_reasons";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
