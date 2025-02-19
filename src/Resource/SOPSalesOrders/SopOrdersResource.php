<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrders\DeleteSoporder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrders\GetSoporder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrders\GetSoporders;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrders\GetSopordersForCustomer;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrders\PostSoporder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrders\PostSopordersNew;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrders\PutSoporder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrders\PutSoporderNew;

class SopOrdersResource
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
	public function getSoporders(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSoporders($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSoporder(): Response
	{
		return $this->connector->send(new PostSoporder());
	}


	/**
	 * @param float|int $id Unique Id of the sales order.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSoporder(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSoporder($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the sales order.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSoporder(float|int $id): Response
	{
		return $this->connector->send(new PutSoporder($id));
	}


	/**
	 * @param float|int $id Unique Id of the sales order.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSoporder(float|int $id): Response
	{
		return $this->connector->send(new DeleteSoporder($id));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSopordersNew(): Response
	{
		return $this->connector->send(new PostSopordersNew());
	}


	/**
	 * @param float|int $id Unique Id of the sales order.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSoporderNew(float|int $id): Response
	{
		return $this->connector->send(new PutSoporderNew($id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSopordersForCustomer(float|int $customerId, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopordersForCustomer($customerId, $queryParameters));
	}
}
