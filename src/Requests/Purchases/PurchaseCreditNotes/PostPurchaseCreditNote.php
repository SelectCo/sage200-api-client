<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseCreditNotes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPurchaseCreditNote
 *
 * Use this resource to enter credit notes directly onto a particular supplier's account. Credit notes
 * are typically used when receiving refunds, returns, etc. and reduce the turnover for the relevant
 * supplier's account.<br /><br />Posting a credit note does not actually create a 'credit note'
 * entity, but a Posted Transaction of type 'TradingAccountEntryTypeCreditNote', therefore it is not
 * possible to 'get' a credit note using the same API endpoint after it has been posted. Posting a
 * purchase credit note returns a URN (Unique Reference Number) that can be used to find the
 * corresponding posted transaction.
 */
class PostPurchaseCreditNote extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/purchase_credit_notes";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
