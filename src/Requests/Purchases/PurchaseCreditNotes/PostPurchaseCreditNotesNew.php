<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseCreditNotes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPurchaseCreditNotesNew
 *
 * Returns a purchase credit note with all the default values for a supplier. The API endpoint does not
 * persist the purchase credit note.
 */
class PostPurchaseCreditNotesNew extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/purchase_credit_notes_new";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
