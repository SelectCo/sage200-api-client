<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopConfirmDespatch;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPConfirmDespatch
 *
 * The confirm despatch records the despatch of goods and services from sales order lines to your
 * customers.<br/><br/>A GET request will return a collection of sales order lines available to
 * despatch and can be filtered on the following fields: confirmation_intent_type, trader_id,
 * warehouse_id, document_no and document_date.<br/><br/>In Sage 200 Professional the
 * confirmation_intent_type can be included in the query filter to determine if you are despatching
 * goods (ConfirmOnDespatch) or services (Confirm). If omitted from the query filter, this value will
 * default to ConfirmOnDespatch and return locked sales order goods to despatch.
 */
class PostSopconfirmDespatch extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_confirm_despatch";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
