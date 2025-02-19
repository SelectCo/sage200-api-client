<?php

namespace Selectco\SageApi\Requests\Stock\ProductMemos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutProductMemo
 *
 * Memos are sections of text that can be used to make comments about a product.<br/><br/>Multiple
 * memos can be added to each product. The user that created the memo, the date it was created and last
 * updated date and time are also recorded.<br/><br/>A user can also specify if a memo is currently
 * 'Active' or 'Inactive'. This allows a user to keep a record of previous memos without deleting them.
 */
class PutProductMemo extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the product memo.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/product_memos/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
