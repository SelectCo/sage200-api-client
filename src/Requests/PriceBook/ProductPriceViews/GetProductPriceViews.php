<?php

namespace Selectco\SageApi\Requests\PriceBook\ProductPriceViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetProductPriceViews
 *
 * This returns the selling prices of your products. A price is returned for each price band associated
 * with a product.<br /><br />A price band is simply a price list. The price a customer receives for a
 * product depends on the price band their account is linked to. The 'Standard' price band is the
 * default.<br /><br />The prices returned here do not include any customer specific discounts. The
 * default sort (orderby) field is by 'product_code' ascending.
 */
class GetProductPriceViews extends Request
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
		$this->endPoint = "/product_price_views";
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
