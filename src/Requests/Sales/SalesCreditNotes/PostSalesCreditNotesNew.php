<?php

namespace Selectco\SageApi\Requests\Sales\SalesCreditNotes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSalesCreditNotesNew
 *
 * Returns a sales credit note with all the default values for a customer. The API endpoint does not
 * persist the sales credit note.
 */
class PostSalesCreditNotesNew extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sales_credit_notes_new";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
