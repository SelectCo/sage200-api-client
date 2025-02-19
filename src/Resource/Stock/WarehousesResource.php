<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\Warehouses\DeleteWarehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehouses;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehousesForProduct;
use Selectco\SageApi\Requests\Stock\Warehouses\PostWarehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\PutWarehouse;

class WarehousesResource
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
	public function getWarehouses(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetWarehouses($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postWarehouse(): Response
	{
		return $this->connector->send(new PostWarehouse());
	}


	/**
	 * @param float|int $id Unique Id of the warehouse.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getWarehouse(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetWarehouse($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the warehouse.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putWarehouse(float|int $id): Response
	{
		return $this->connector->send(new PutWarehouse($id));
	}


	/**
	 * @param float|int $id Unique Id of the warehouse.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteWarehouse(float|int $id): Response
	{
		return $this->connector->send(new DeleteWarehouse($id));
	}


	/**
	 * @param float|int $productId Unique Id of a product.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getWarehousesForProduct(float|int $productId, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetWarehousesForProduct($productId, $queryParameters));
	}
}
