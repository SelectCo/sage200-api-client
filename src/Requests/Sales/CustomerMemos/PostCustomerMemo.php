<?php

namespace Selectco\SageApi\Requests\Sales\CustomerMemos;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCustomerMemo
 *
 * Memos are sections of text that can be used to make comments about a customer account such as
 * reminders, or notes (e.g. if there is currently a dispute over an order).<br/><br/>Multiple memos
 * can be added to each account. The user that created the memo, the date it was created and last
 * updated date and time are also recorded.<br/><br/>A user can also specify if a memo is currently
 * 'Active' or 'Inactive'. This allows a user to keep a record of previous memos without deleting them.
 */
class PostCustomerMemo extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/customer_memos";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
