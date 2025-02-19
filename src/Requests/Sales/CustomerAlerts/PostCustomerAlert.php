<?php

namespace Selectco\SageApi\Requests\Sales\CustomerAlerts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCustomerAlert
 *
 * Alerts are messages that can be displayed when a user performs a particular task. You can show
 * alerts when entering invoices or credit notes, sales orders and returns, quotations and pro forma
 * invoices, and for customer price enquiries.
 */
class PostCustomerAlert extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/customer_alerts";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
