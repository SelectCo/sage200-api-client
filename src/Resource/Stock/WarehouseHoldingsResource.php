<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Stock\WarehouseHolding;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Selectco\SageApi\Exception\DataValidationException;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\DelWarehouseHolding;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\GetWarehouseHolding;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\GetWarehouseHoldings;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\GetWarehouseHoldingsForProduct;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\GetWarehouseHoldingsForProductAndWarehouse;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\GetWarehouseHoldingsForWarehouse;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\GetWarehouseHoldingsForWarehouseAndProduct;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\PostWarehouseHoldings;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\PutWarehouseHolding;

class WarehouseHoldingsResource
{
    /**
     * @param Connector $connector
     */
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @param string|null $queryParameters
     * @return WarehouseHolding[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouseHoldings(string|null $queryParameters = ''): array
    {
        $warehouseHolding = new GetWarehouseHoldings();
        $warehouseHolding->setQueryParameters($queryParameters);
        return $this->connector->send($warehouseHolding)->dto();
    }

    /**
     * @param array $data
     * @return WarehouseHolding
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function postWarehouseHoldings(array $data): WarehouseHolding
    {
        $warehouse = new PostWarehouseHoldings($data);
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
     * @return WarehouseHolding
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouseHolding(int $id, string|null $queryParameters = ''): WarehouseHolding
    {
        $warehouseHolding = new GetWarehouseHolding($id);
        $warehouseHolding->setQueryParameters($queryParameters);
        return $this->connector->send($warehouseHolding)->dto();
    }

    /**
     * @param int $id
     * @param array $data
     * @return WarehouseHolding
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function putWarehouseHolding(int $id, array $data): WarehouseHolding
    {
        $warehouse = new PutWarehouseHolding($id, $data);
        $errors = $warehouse->verifyData();

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }

        return $this->connector->send($warehouse)->dto();
    }

    /**
     * @param int $warehouseId
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delWarehouseHolding(int $warehouseId): Response
    {
        return $this->connector->send(new DelWarehouseHolding($warehouseId));
    }

    /**
     * @param int $productId
     * @param string|null $queryParameters
     * @return WarehouseHolding[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouseHoldingsForProduct(int $productId, string|null $queryParameters = ''): array
    {
        $warehouseHolding = new GetWarehouseHoldingsForProduct($productId);
        $warehouseHolding->setQueryParameters($queryParameters);
        return $this->connector->send($warehouseHolding)->dto();
    }

    /**
     * @param int $productId
     * @param int $warehouseId
     * @param string|null $queryParameters
     * @return WarehouseHolding[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouseHoldingsForProductAndWarehouse(int $productId, int $warehouseId, string|null $queryParameters = ''): array
    {
        $warehouseHolding = new GetWarehouseHoldingsForProductAndWarehouse($productId, $warehouseId);
        $warehouseHolding->setQueryParameters($queryParameters);
        return $this->connector->send($warehouseHolding)->dto();
    }

    /**
     * @param int $warehouseId
     * @param string|null $queryParameters
     * @return WarehouseHolding[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouseHoldingsForWarehouse(int $warehouseId, string|null $queryParameters = ''): array
    {
        $warehouseHolding = new GetWarehouseHoldingsForWarehouse($warehouseId);
        $warehouseHolding->setQueryParameters($queryParameters);
        return $this->connector->send($warehouseHolding)->dto();
    }

    /**
     * @param int $warehouseId
     * @param int $productId
     * @param string|null $queryParameters
     * @return WarehouseHolding[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouseHoldingsForWarehouseAndProduct(int $warehouseId, int $productId, string|null $queryParameters = ''): array
    {
        $warehouseHolding = new GetWarehouseHoldingsForWarehouseAndProduct($warehouseId, $productId);
        $warehouseHolding->setQueryParameters($queryParameters);
        return $this->connector->send($warehouseHolding)->dto();
    }
}