<?php

namespace Selectco\SageApi\Requests\Sales\SalesPostedTransactionMemos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSalesPostedTransactionMemo
 *
 * Memos are comments that are made about a sales posted transaction.<br/><br/>Multiple memos can be
 * added to each sales posted transaction. The user that created the memo, the date it was created and
 * last updated date and time are also recorded.<br/><br/>A user can also specify if a memo is
 * currently 'Active' or 'Inactive'. This allows a user to keep a record of previous memos without
 * deleting them.
 */
class PutSalesPostedTransactionMemo extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the sales posted transaction memo.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sales_posted_transaction_memos/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
