<?php

namespace Selectco\SageApi\Requests\Sales\SalesCreditNotes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSalesCreditNote
 *
 * Use this resource to enter credit notes directly onto to a particular customer's account. Credit
 * notes are typically used when issuing refunds, returns, etc and reduces the turnover for the
 * relevant customer's account.<br /><br />Posting a credit note does not actually create a 'credit
 * note' entity, but a Posted Transaction of type 'TradingAccountEntryTypeCreditNote', therefore it is
 * not possible to 'get' a credit note using the same API endpoint after it has been posted. Posting a
 * sales credit note returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.
 */
class PostSalesCreditNote extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sales_credit_notes";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
