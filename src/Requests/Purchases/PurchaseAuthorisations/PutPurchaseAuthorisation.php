<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseAuthorisations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutPurchaseAuthorisation
 *
 * Invoices and Credit Notes which are above a threshold value are unauthorised. The value of
 * unauthorised transactions is posted to the default nominal account for Unauthorised Purchases. Use
 * authorisation to reverse the posting from the Unauthorised Purchases nominal account and post to the
 * intended account.
 */
class PutPurchaseAuthorisation extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the transaction.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/purchase_authorisations/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
