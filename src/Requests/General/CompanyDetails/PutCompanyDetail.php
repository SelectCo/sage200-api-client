<?php

namespace Selectco\SageApi\Requests\General\CompanyDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCompanyDetail
 *
 * Update the company details.
 */
class PutCompanyDetail extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the company details.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/company_details/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
