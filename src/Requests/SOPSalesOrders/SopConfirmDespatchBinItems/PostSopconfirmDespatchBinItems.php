<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopConfirmDespatchBinItems;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPConfirmDespatchBinItems
 *
 * Gets the list of bin items for the sales order line for despatch for non-traceable, multiple bin
 * stock items.
 */
class PostSopconfirmDespatchBinItems extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_confirm_despatch_bin_items";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
