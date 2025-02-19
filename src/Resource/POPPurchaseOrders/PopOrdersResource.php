<?php

namespace Selectco\SageApi\Resource\POPPurchaseOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders\DeletePoporder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders\GetPoporder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders\GetPoporders;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders\GetPopordersForSupplier;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders\PostPoporder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders\PostPopordersNew;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders\PutPoporder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders\PutPoporderNew;

class PopOrdersResource
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
	public function getPoporders(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPoporders($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postPoporder(): Response
	{
		return $this->connector->send(new PostPoporder());
	}


	/**
	 * @param float|int $id Unique Id of the POP order.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPoporder(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPoporder($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the POP order.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putPoporder(float|int $id): Response
	{
		return $this->connector->send(new PutPoporder($id));
	}


	/**
	 * @param float|int $id Unique Id of the purchase order.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deletePoporder(float|int $id): Response
	{
		return $this->connector->send(new DeletePoporder($id));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postPopordersNew(): Response
	{
		return $this->connector->send(new PostPopordersNew());
	}


	/**
	 * @param float|int $id Unique Id of the purchase order.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putPoporderNew(float|int $id): Response
	{
		return $this->connector->send(new PutPoporderNew($id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPopordersForSupplier(float|int $supplierId, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPopordersForSupplier($supplierId, $queryParameters));
	}
}
