<?php

namespace Selectco\SageApi\Requests\CashBook\BankPayment;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostBankPayment
 *
 * Payments are used to record money paid from a bank account (Sage 200 Standard and versions of
 * Professional released after July 2017). In the Sage 200 app, this is equivalent to making a Nominal
 * Vatable Payment or a Non-Vatable Payment. <br /><br />Posting a bank payment does not actually
 * create a 'bank payment' entity, but a Posted Transaction of type 'BankAccountEntryType.Payment',
 * therefore it is not possible to 'get' a bank payment using the same API endpoint after it has been
 * posted. Posting a bank payment returns a URN (Unique Reference Number) that can be used to find the
 * corresponding posted transaction.<br /><br />Note: Before posting a bank payment via the API, at
 * least one bank account must exist within Sage 200.
 */
class PostBankPayment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/bank_payment";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
