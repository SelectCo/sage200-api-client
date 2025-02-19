<?php

namespace Selectco\SageApi\Requests\Nominal\NominalCodes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostNominalCodesNew
 *
 * Returns a nominal code with all the defaults that have been specified within the application. The
 * API endpoint does not persist the nominal code.
 */
class PostNominalCodesNew extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/nominal_codes_new";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
