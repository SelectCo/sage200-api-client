<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerMemos\DeleteCustomerMemo;
use Selectco\SageApi\Requests\Sales\CustomerMemos\GetCustomerMemo;
use Selectco\SageApi\Requests\Sales\CustomerMemos\GetCustomerMemos;
use Selectco\SageApi\Requests\Sales\CustomerMemos\GetCustomerMemosForCustomer;
use Selectco\SageApi\Requests\Sales\CustomerMemos\PostCustomerMemo;
use Selectco\SageApi\Requests\Sales\CustomerMemos\PutCustomerMemo;

class CustomerMemosResource
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
	public function getCustomerMemos(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerMemos($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerMemo(): Response
	{
		return $this->connector->send(new PostCustomerMemo());
	}


	/**
	 * @param float|int $id Unique Id of the customer memo.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerMemo(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerMemo($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerMemo(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerMemo($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerMemo(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerMemo($id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerMemosForCustomer(
		float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerMemosForCustomer($customerId, $queryParameters));
	}
}
