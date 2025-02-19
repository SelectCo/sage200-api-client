<?php

namespace Selectco\SageApi\Requests\Stock\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetProductsForProductGroup
 *
 * Products are used to track stock within Sage 200. This is not just for physical items, but also for
 * items that are ordered direct from suppliers, services, and time or labour that can be included on
 * customer invoices.<P>Each stock item has default settings that are used each time the item is bought
 * or sold. Some of these are inherited from the product group and some are set on each item.</P>
 */
class GetProductsForProductGroup extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $productGroupId Unique Id of the product group.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $productGroupId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/product_groups/{$this->productGroupId}/products";
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
