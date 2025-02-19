<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\Products\DeleteProduct;
use Selectco\SageApi\Requests\Stock\Products\GetProduct;
use Selectco\SageApi\Requests\Stock\Products\GetProducts;
use Selectco\SageApi\Requests\Stock\Products\GetProductsForProductGroup;
use Selectco\SageApi\Requests\Stock\Products\PostProduct;
use Selectco\SageApi\Requests\Stock\Products\PutProduct;

class ProductsResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getProducts(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetProducts($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postProduct(): Response
	{
		return $this->connector->send(new PostProduct());
	}


	/**
	 * @param float|int $id Unique Id of the product.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getProduct(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetProduct($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the product.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putProduct(float|int $id): Response
	{
		return $this->connector->send(new PutProduct($id));
	}


	/**
	 * @param float|int $id Unique Id of the product.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteProduct(float|int $id): Response
	{
		return $this->connector->send(new DeleteProduct($id));
	}


	/**
	 * @param float|int $productGroupId Unique Id of the product group.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getProductsForProductGroup(
		float|int $productGroupId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetProductsForProductGroup($productGroupId, $queryParameters));
	}
}
