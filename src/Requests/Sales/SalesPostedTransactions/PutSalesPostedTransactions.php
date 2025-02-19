<?php

namespace Selectco\SageApi\Requests\Sales\SalesPostedTransactions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSalesPostedTransactions
 *
 * Sales posted transactions are created when transactions, such as orders invoiced, receipts, refunds
 * or credit notes, are posted against the Sales Ledger.<br /><br />It is not possible to use this API
 * resource to create posted transactions. To post a transaction, the necessary API resource must be
 * invoked. When making larger requests for customer information, the Sales Transactions Views resource
 * can be a faster alternative to this resource.<br /><br />It is possible to use this API resource to
 * update a transaction's queried status.
 */
class PutSalesPostedTransactions extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id The unique Id of the sales posted transaction.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sales_posted_transactions/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
