<?php

namespace Selectco\SageApi\Requests\Sales\CustomerAlerts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerAlert
 *
 * Alerts are messages that can be displayed when a user performs a particular task. You can show
 * alerts when entering invoices or credit notes, sales orders and returns, quotations and pro forma
 * invoices, and for customer price enquiries.
 */
class DeleteCustomerAlert extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer alert.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/customer_alerts/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
