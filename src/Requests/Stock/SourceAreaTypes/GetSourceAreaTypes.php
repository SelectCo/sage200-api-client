<?php

namespace Selectco\SageApi\Requests\Stock\SourceAreaTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSourceAreaTypes
 *
 * Source area types are used to describe the area or account type applicable to a stock transaction.
 * Source area types can be 'EnumSourceAreaTypeSupplier', 'EnumSourceAreaTypeCustomer',
 * 'EnumSourceAreaTypeInternal', 'EnumSourceAreaTypeWriteOff', 'EnumSourceAreaTypeOpeningBalance',
 * 'EnumSourceAreaTypeBOM'.<P>The API endpoint returns details of the source area types that can be
 * used.</P>
 */
class GetSourceAreaTypes extends Request
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
		$this->endPoint = "/source_area_types";
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
