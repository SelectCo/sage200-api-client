<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Stock;

use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Selectco\SageApi\Exception\DataValidationException;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehouses;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehousesForProduct;
use Selectco\SageApi\Requests\Stock\Warehouses\PostWarehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\PutWarehouse;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;

class WarehousesResource
{

    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @param int $id
     * @return Warehouse
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouse(int $id): Warehouse
    {
        return $this->connector->send(new GetWarehouse($id))->dto();
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
     * @param array $data
     * @return Warehouse
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function postWarehouse(array $data): Warehouse
    {
        $warehouse = new PostWarehouse($data);
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
}