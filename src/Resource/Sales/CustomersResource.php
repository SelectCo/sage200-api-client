<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\Customers\DeleteCustomer;
use Selectco\SageApi\Requests\Sales\Customers\GetCustomer;
use Selectco\SageApi\Requests\Sales\Customers\GetCustomers;
use Selectco\SageApi\Requests\Sales\Customers\PostCustomer;
use Selectco\SageApi\Requests\Sales\Customers\PostCustomersNew;
use Selectco\SageApi\Requests\Sales\Customers\PutCustomer;

class CustomersResource
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
	public function getCustomers(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomers($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomer(): Response
	{
		return $this->connector->send(new PostCustomer());
	}


	/**
	 * @param float|int $id Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomer(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomer($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomer(float|int $id): Response
	{
		return $this->connector->send(new PutCustomer($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomer(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomer($id));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomersNew(): Response
	{
		return $this->connector->send(new PostCustomersNew());
	}
}
