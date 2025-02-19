<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\AlternativeProducts\DeleteAlternativeProduct;
use Selectco\SageApi\Requests\Stock\AlternativeProducts\GetAlternativeProduct;
use Selectco\SageApi\Requests\Stock\AlternativeProducts\GetAlternativeProducts;
use Selectco\SageApi\Requests\Stock\AlternativeProducts\PostAlternativeProduct;
use Selectco\SageApi\Requests\Stock\AlternativeProducts\PutAlternativeProduct;

class AlternativeProductsResource
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
	public function getAlternativeProducts(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetAlternativeProducts($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postAlternativeProduct(): Response
	{
		return $this->connector->send(new PostAlternativeProduct());
	}


	/**
	 * @param float|int $id Unique Id of the alternative product.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getAlternativeProduct(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetAlternativeProduct($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the alternative product.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putAlternativeProduct(float|int $id): Response
	{
		return $this->connector->send(new PutAlternativeProduct($id));
	}


	/**
	 * @param float|int $id Unique Id of the alternative product.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteAlternativeProduct(float|int $id): Response
	{
		return $this->connector->send(new DeleteAlternativeProduct($id));
	}
}
