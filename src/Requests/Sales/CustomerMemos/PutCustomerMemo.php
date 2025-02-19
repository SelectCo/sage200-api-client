<?php

namespace Selectco\SageApi\Requests\Sales\CustomerMemos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCustomerMemo
 *
 * Memos are sections of text that can be used to make comments about a customer account such as
 * reminders, or notes (e.g. if there is currently a dispute over an order).<br/><br/>Multiple memos
 * can be added to each account. The user that created the memo, the date it was created and last
 * updated date and time are also recorded.<br/><br/>A user can also specify if a memo is currently
 * 'Active' or 'Inactive'. This allows a user to keep a record of previous memos without deleting them.
 */
class PutCustomerMemo extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer memo.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/customer_memos/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
