<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\POPPurchaseOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\DataValidationException;
use Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders\DelPurchaseOrder;
use Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders\GetPurchaseOrder;
use Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders\GetPurchaseOrders;
use Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders\PostNewPurchaseOrderWithDefaults;
use Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders\PostPurchaseOrders;
use Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders\PutPurchaseOrder;

class POPOrdersResource
{
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @param string|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getPurchaseOrders(string|null $queryParameters = ''): Response
    {
        return $this->connector->send(new GetPurchaseOrders($queryParameters));
    }

    /**
     * @param array $data
     * @return Response
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function postPurchaseOrders(array $data): Response
    {
        return $this->connector->send(new PostPurchaseOrders($data));
    }

    /**
     * @param int $id
     * @param string|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getPurchaseOrder(int $id, string|null $queryParameters = ''): Response
    {
        return $this->connector->send(new GetPurchaseOrder($id, $queryParameters));
    }

    /**
     * @param int $id
     * @param array $data
     * @return Response
     * @throws DataValidationException
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function putPurchaseOrder(int $id, array $data): Response
    {
        return $this->connector->send(new PutPurchaseOrder($id, $data));
    }

    /**
     * @param int $id
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delPurchaseOrder(int $id): Response
    {
        return $this->connector->send(new DelPurchaseOrder($id));
    }

    /**
     * @param int $supplier_id
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     * @throws DataValidationException
     */
    public function postNewPurchaseOrderWithDefaults(int $supplier_id): Response
    {
        return $this->connector->send(new PostNewPurchaseOrderWithDefaults($supplier_id));
    }
}