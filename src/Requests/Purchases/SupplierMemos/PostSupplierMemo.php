<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierMemos;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSupplierMemo
 *
 * Memos are sections of text that can be used to make comments about a supplier account such as
 * reminders, or notes (e.g. if there is currently a dispute over an order). These can be used to note
 * information about previous communications, or anything that should be taken into consideration when
 * contacting the supplier (e.g. there is currently a dispute over order).<br/><br/>Multiple memos can
 * be added to each account. The user that created the memo, the date it was created and last updated
 * date and time are also recorded.<br/><br/>A user can also specify if a memo is currently 'Active' or
 * 'Inactive'. This allows a user to keep a record of previous memos without deleting them.
 */
class PostSupplierMemo extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/supplier_memos";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
