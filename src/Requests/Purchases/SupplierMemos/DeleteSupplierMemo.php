<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierMemos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSupplierMemo
 *
 * Memos are sections of text that can be used to make comments about a supplier account such as
 * reminders, or notes (e.g. if there is currently a dispute over an order). These can be used to note
 * information about previous communications, or anything that should be taken into consideration when
 * contacting the supplier (e.g. there is currently a dispute over order).<br/><br/>Multiple memos can
 * be added to each account. The user that created the memo, the date it was created and last updated
 * date and time are also recorded.<br/><br/>A user can also specify if a memo is currently 'Active' or
 * 'Inactive'. This allows a user to keep a record of previous memos without deleting them.
 */
class DeleteSupplierMemo extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the supplier memo.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/supplier_memos/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
