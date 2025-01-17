<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\DataValidationException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\GetSalesPostedTransaction;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\GetSalesPostedTransactions;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\GetSalesPostedTransactionsForCustomer;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\PutSalesPostedTransaction;

class SalesPostedTransactionsResource
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
    public function getSalesPostedTransactions(SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetSalesPostedTransactions($queryParameters));
    }

    /**
     * @param int $transactionId
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getSalesPostedTransaction(int $transactionId, SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetSalesPostedTransaction($transactionId, $queryParameters));
    }

    /**
     * @param int $transactionId
     * @param array $data
     * @return Response
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function putSalesPostedTransaction(int $transactionId, array $data): Response
    {
        return $this->connector->send(new PutSalesPostedTransaction($transactionId, $data));
    }

    /**
     * @param int $customerId
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getSalesPostedTransactionsForCustomer(int $customerId, SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetSalesPostedTransactionsForCustomer($customerId, $queryParameters));
    }
}