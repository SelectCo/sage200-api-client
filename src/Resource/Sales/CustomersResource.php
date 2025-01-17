<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\DataValidationException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\Customers\DelCustomer;
use Selectco\SageApi\Requests\Sales\Customers\GetCustomer;
use Selectco\SageApi\Requests\Sales\Customers\GetCustomers;
use Selectco\SageApi\Requests\Sales\Customers\PostCustomers;
use Selectco\SageApi\Requests\Sales\Customers\PostNewCustomerWithDefaults;
use Selectco\SageApi\Requests\Sales\Customers\PutCustomer;

class CustomersResource
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
    public function getCustomers(SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetCustomers($queryParameters));
    }

    /**
     * @param array $data
     * @return Response
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function postCustomers(array $data): Response
    {
        return $this->connector->send(new PostCustomers($data));
    }

    /**
     * @param int $customerId
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function GetCustomer(int $customerId, SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetCustomer($customerId, $queryParameters));
    }

    /**
     * @param int $customerId
     * @param array $data
     * @return Response
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function putCustomer(int $customerId, array $data): Response
    {
        return $this->connector->send(new PutCustomer($customerId, $data));
    }

    /**
     * @param int $customerId
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delCustomer(int $customerId): Response
    {
        return $this->connector->send(new DelCustomer($customerId));
    }

    /**
     * @param array $data
     * @return Response
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function postNewCustomerWithDefaults(array $data): Response
    {
        return $this->connector->send(new PostNewCustomerWithDefaults($data));
    }
}