<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\DataValidationException;
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
     * @param string|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getCustomers(string|null $queryParameters = ''): Response
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
        $customer = new PostCustomers($data);
        $errors = $customer->verifyData();

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }

        return $this->connector->send($customer);
    }

    /**
     * @param int $customerId
     * @param string|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function GetCustomer(int $customerId, string|null $queryParameters = ''): Response
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
        $customer = new PutCustomer($customerId, $data);
        $errors = $customer->verifyData();

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }

        return $this->connector->send($customer);
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
        $customer = new PostNewCustomerWithDefaults($data);
        $errors = $customer->verifyData();

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }

        return $this->connector->send($customer);
    }
}