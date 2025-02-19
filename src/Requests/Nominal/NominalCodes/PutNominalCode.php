<?php

namespace Selectco\SageApi\Requests\Nominal\NominalCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutNominalCode
 *
 * Nominal accounts are fundamental to the successful management of company finances. The value of
 * every transaction entered into Sage 200 is posted to a nominal account and, is where the revenue and
 * expenditure of the business is recorded.<P>Nominal accounts include a code, and cost centre and a
 * department.</P><P>The API endpoint returns details of the nominal codes that can be used.</P>
 */
class PutNominalCode extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the nominal code.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/nominal_codes/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
