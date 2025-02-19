<?php

namespace Selectco\SageApi\Requests\CashBook\BankReceipt;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostBankReceipt
 *
 * Receipts are used to record money received against a bank account (Sage 200 Standard and versions of
 * Professional released after July 2017). In the Sage 200 app, this is equivalent to making a Nominal
 * Vatable Receipt or a Non-Vatable Receipt. <br /><br />Posting a bank receipt does not actually
 * create a 'bank receipt' entity, but a Posted Transaction of type 'BankAccountEntryType.Receipt',
 * therefore it is not possible to 'get' a bank  receipt using the same API endpoint after it has been
 * posted. Posting a bank receipt returns a URN (Unique Reference Number) that can be used to find the
 * corresponding posted transaction.<br /><br />Note: Before posting bank receipts via the API, at
 * least one bank account must exist within Sage 200.
 */
class PostBankReceipt extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/bank_receipt";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
