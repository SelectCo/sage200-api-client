<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopOrderLines;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSOPOrderLinesForSOPOrder
 *
 * All sales orders contain 'line items' that define what an order consists of (e.g. items on an
 * order). If the contents of an order are modified by adding/updating/deleting order lines, this will
 * affect the overall value of the order.
 */
class GetSoporderLinesForSoporder extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $sopOrderId Unique Id of the SOP order.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $sopOrderId,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/sop_orders/{$this->sopOrderId}/sop_order_lines";
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
