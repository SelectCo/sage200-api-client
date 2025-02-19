<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\DeleteWarehouseHolding;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\GetWarehouseHolding;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\GetWarehouseHoldings;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\GetWarehouseHoldingsForProduct;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\GetWarehouseHoldingsForProductAndWarehouse;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\GetWarehouseHoldingsForWarehouse;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\GetWarehouseHoldingsForWarehouseAndProduct;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\PostWarehouseHolding;
use Selectco\SageApi\Requests\Stock\WarehouseHoldings\PutWarehouseHolding;

class WarehouseHoldingsResource
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
	public function getWarehouseHoldings(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetWarehouseHoldings($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postWarehouseHolding(): Response
	{
		return $this->connector->send(new PostWarehouseHolding());
	}


	/**
	 * @param float|int $id Unique Id of the warehouse holding.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getWarehouseHolding(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetWarehouseHolding($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the warehouse holding.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putWarehouseHolding(float|int $id): Response
	{
		return $this->connector->send(new PutWarehouseHolding($id));
	}


	/**
	 * @param float|int $id Unique Id of the warehouse holding.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteWarehouseHolding(float|int $id): Response
	{
		return $this->connector->send(new DeleteWarehouseHolding($id));
	}


	/**
	 * @param float|int $warehouseId Unique Id of the warehouse.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getWarehouseHoldingsForWarehouse(
		float|int $warehouseId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetWarehouseHoldingsForWarehouse($warehouseId, $queryParameters));
	}


	/**
	 * @param float|int $productId Unique Id of the product.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getWarehouseHoldingsForProduct(
		float|int $productId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetWarehouseHoldingsForProduct($productId, $queryParameters));
	}


	/**
	 * @param float|int $productId Unique Id of the product.
	 * @param float|int $warehouseId Unique Id of the warehouse.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getWarehouseHoldingsForWarehouseAndProduct(
		float|int $productId,
		float|int $warehouseId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetWarehouseHoldingsForWarehouseAndProduct($productId, $warehouseId, $queryParameters));
	}


	/**
	 * @param float|int $productId Unique Id of the product.
	 * @param float|int $warehouseId Unique Id of the warehouse.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getWarehouseHoldingsForProductAndWarehouse(
		float|int $productId,
		float|int $warehouseId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetWarehouseHoldingsForProductAndWarehouse($productId, $warehouseId, $queryParameters));
	}
}
