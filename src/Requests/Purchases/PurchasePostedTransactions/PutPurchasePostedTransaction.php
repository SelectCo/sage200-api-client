<?php

namespace Selectco\SageApi\Requests\Purchases\PurchasePostedTransactions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutPurchasePostedTransaction
 *
 * Purchase posted transactions are created when transactions, such as purchases made, refunds or
 * credit notes, are posted against the Purchase Ledger.<br /><br />It is not possible to use this API
 * resource to create posted transactions. To post a transaction, the necessary API resource must be
 * invoked.<br /><br />It is possible to use this API resource to update a transaction's queried
 * status.
 */
class PutPurchasePostedTransaction extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id The unique Id of the purchase posted transaction.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/purchase_posted_transactions/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
