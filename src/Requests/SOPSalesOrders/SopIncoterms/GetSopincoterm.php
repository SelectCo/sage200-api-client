<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSOPIncoterm
 *
 * Incoterms are used to provide a set of international rules for the interpretation of the most
 * commonly used trade terms in international SOP orders.
 */
class GetSopincoterm extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $id Unique Id of the SOP Incoterm.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $id,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/sop_incoterms/{$this->id}";
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
