<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerAlerts\DeleteCustomerAlert;
use Selectco\SageApi\Requests\Sales\CustomerAlerts\GetCustomerAlert;
use Selectco\SageApi\Requests\Sales\CustomerAlerts\GetCustomerAlerts;
use Selectco\SageApi\Requests\Sales\CustomerAlerts\GetCustomerAlertsForCustomer;
use Selectco\SageApi\Requests\Sales\CustomerAlerts\PostCustomerAlert;
use Selectco\SageApi\Requests\Sales\CustomerAlerts\PutCustomerAlert;

class CustomerAlertsResource
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
	public function getCustomerAlerts(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerAlerts($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerAlert(): Response
	{
		return $this->connector->send(new PostCustomerAlert());
	}


	/**
	 * @param float|int $id Unique Id of the customer alert.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerAlert(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerAlert($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer alert.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerAlert(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerAlert($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer alert.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerAlert(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerAlert($id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerAlertsForCustomer(
        float|int             $customerId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerAlertsForCustomer($customerId, $queryParameters));
	}
}
