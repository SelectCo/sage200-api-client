<?php

namespace Selectco\SageApi\Requests\Stock\EntrySourceTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetEntrySourceTypes
 *
 * Entry source types are used to describe the source module that was used to create a transaction.
 * Entry source types can be 'EnumEntrySourceTypeStock', 'EnumEntrySourceTypeSOP',
 * 'EnumEntrySourceTypePOP', 'EnumEntrySourceTypeBOM', 'EnumEntrySourceTypeManual'.<P>The API endpoint
 * returns details of the entry source types that can be used.</P>
 */
class GetEntrySourceTypes extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(?SageODataBuilder $queryParameters = null)
	{
		$this->endPoint = "/entry_source_types";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(?SageODataBuilder $queryParameters = null): void
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
