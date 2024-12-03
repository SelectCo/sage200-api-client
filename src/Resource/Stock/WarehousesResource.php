<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Selectco\SageApi\Exception\DataValidationException;
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
     * @param string|null $queryParameters
     * @return Warehouse[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouses(string|null $queryParameters = ''): array
    {
        $warehouses = new GetWarehouses();
        $warehouses->setQueryParameters($queryParameters);
        return $this->connector->send($warehouses)->dto();
    }

    /**
     * @param array $data
     * @return Warehouse
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function postWarehouses(array $data): Warehouse
    {
        $warehouse = new PostWarehouses($data);
        $errors = $warehouse->verifyData();

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }

        return $this->connector->send($warehouse)->dto();
    }

    /**
     * @param int $id
     * @param string|null $queryParameters
     * @return Warehouse
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouse(int $id, string|null $queryParameters = ''): Warehouse
    {
        $warehouse = new GetWarehouse($id);
        $warehouse->setQueryParameters($queryParameters);
        return $this->connector->send($warehouse)->dto();
    }

    /**
     * @param int $id
     * @param array $data
     * @return Warehouse
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function putWarehouse(int $id, array $data): Warehouse
    {
        $warehouse = new PutWarehouse($id, $data);
        $errors = $warehouse->verifyData();

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }

        return $this->connector->send($warehouse)->dto();
    }

    /**
     * @param string|int $productId
     * @param string|null $queryParameters
     * @return Warehouse[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehousesForProduct(string|int $productId, string|null $queryParameters = ''): array
    {
        $warehouses = new GetWarehousesForProduct($productId);
        $warehouses->setQueryParameters($queryParameters);
        return $this->connector->send($warehouses)->dto();
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