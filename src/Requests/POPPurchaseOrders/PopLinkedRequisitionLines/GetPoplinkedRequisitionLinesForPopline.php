<?php

namespace Selectco\SageApi\Requests\POPPurchaseOrders\PopLinkedRequisitionLines;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetPOPLinkedRequisitionLinesForPOPLine
 *
 * Returns the linked requisition lines for a single POP line.
 */
class GetPoplinkedRequisitionLinesForPopline extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $lineId Unique Id of the POP order line.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $lineId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/pop_order_lines/{$this->lineId}/pop_linked_requisition_lines";
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
