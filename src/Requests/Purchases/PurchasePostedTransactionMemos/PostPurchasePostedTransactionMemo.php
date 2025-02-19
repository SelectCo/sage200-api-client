<?php

namespace Selectco\SageApi\Requests\Purchases\PurchasePostedTransactionMemos;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPurchasePostedTransactionMemo
 *
 * Memos are comments that are made about a purchase posted transaction.<br/><br/>Multiple memos can be
 * added to each purchase posted transaction. The user that created the memo, the date it was created
 * and last updated date and time are also recorded.<br/><br/>A user can also specify if a memo is
 * currently 'Active' or 'Inactive'. This allows a user to keep a record of previous memos without
 * deleting them.
 */
class PostPurchasePostedTransactionMemo extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/purchase_posted_transaction_memos";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
