<?php

namespace Selectco\SageApi\Requests\Stock\AutoGenerateSeparators;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetAutoGenerateSeparators
 *
 * Auto generate separators are used to auto generate the batch or serial numbers associated with the
 * product that exist within the application. Auto generate separators can be 'None', 'Space', 'Colon',
 * 'Forward Slash', 'Backward Slash', 'Dot' or 'Hyphen'.<P>The API endpoint returns details of the auto
 * generate option types that can be used.</P>
 */
class GetAutoGenerateSeparators extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(SageODataBuilder|null $queryParameters = null)
	{
		$this->endPoint = "/auto_generate_separators";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(SageODataBuilder|null $queryParameters = null): void
	{
		if ($queryParameters) {
		    $this->queryString = $queryParameters->buildQueryString();
		}
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint . $this->queryString;
	}
}
