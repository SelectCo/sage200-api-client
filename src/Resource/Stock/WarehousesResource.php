<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\DataValidationException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\Warehouses\PostWarehouses;
use Selectco\SageApi\Requests\Stock\Warehouses\DelWarehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehouses;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehousesForProduct;
use Selectco\SageApi\Requests\Stock\Warehouses\PutWarehouse;

class WarehousesResource
{
    /**
     * @param Connector $connector
     */
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouses(SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetWarehouses($queryParameters));
    }

    /**
     * @param array $data
     * @return Response
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function postWarehouses(array $data): Response
    {
        return $this->connector->send(new PostWarehouses($data));
    }

    /**
     * @param int $id
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouse(int $id, SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetWarehouse($id, $queryParameters));
    }

    /**
     * @param int $id
     * @param array $data
     * @return Response
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function putWarehouse(int $id, array $data): Response
    {
        return $this->connector->send(new PutWarehouse($id, $data));
    }

    /**
     * @param string|int $productId
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehousesForProduct(string|int $productId, SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetWarehousesForProduct($productId, $queryParameters));
    }

    /**
     * @param int $warehouseId
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delWarehouse(int $warehouseId): Response
    {
        return $this->connector->send(new DelWarehouse($warehouseId));
    }
}