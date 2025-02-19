<?php

namespace Selectco\SageApi\Requests\POPPurchaseOrders\PopCancelledLines;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetPOPCancelledLine
 *
 * Cancelled lines are created if removing a line from an order or return, or if reducing the quantity
 * on a line (subject to record_cancelled_order_lines being enabled in POP Settings).
 */
class GetPopcancelledLine extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $id The purchase order return cancelled line Id.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $id,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/pop_cancelled_lines/{$this->id}";
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
