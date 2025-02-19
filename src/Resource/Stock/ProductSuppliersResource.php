<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\ProductSuppliers\DeleteProductSupplier;
use Selectco\SageApi\Requests\Stock\ProductSuppliers\GetProductSupplier;
use Selectco\SageApi\Requests\Stock\ProductSuppliers\GetProductSuppliers;
use Selectco\SageApi\Requests\Stock\ProductSuppliers\PostProductSupplier;
use Selectco\SageApi\Requests\Stock\ProductSuppliers\PutProductSupplier;

class ProductSuppliersResource
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
	public function getProductSuppliers(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetProductSuppliers($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postProductSupplier(): Response
	{
		return $this->connector->send(new PostProductSupplier());
	}


	/**
	 * @param float|int $id Unique Id of the product supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getProductSupplier(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetProductSupplier($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the product supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putProductSupplier(float|int $id): Response
	{
		return $this->connector->send(new PutProductSupplier($id));
	}


	/**
	 * @param float|int $id Unique Id of the product supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteProductSupplier(float|int $id): Response
	{
		return $this->connector->send(new DeleteProductSupplier($id));
	}
}
