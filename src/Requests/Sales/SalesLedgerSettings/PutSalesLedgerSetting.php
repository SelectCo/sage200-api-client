<?php

namespace Selectco\SageApi\Requests\Sales\SalesLedgerSettings;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSalesLedgerSetting
 *
 * Update the Sales Ledger settings.
 */
class PutSalesLedgerSetting extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the Sales Ledger settings.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sales_ledger_settings/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
