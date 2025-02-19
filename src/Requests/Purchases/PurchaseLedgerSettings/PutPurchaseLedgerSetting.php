<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseLedgerSettings;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutPurchaseLedgerSetting
 *
 * Update the Purchase Ledger settings.
 */
class PutPurchaseLedgerSetting extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the Purchase Ledger settings.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/purchase_ledger_settings/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
