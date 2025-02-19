<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\Departments\DeleteDepartment;
use Selectco\SageApi\Requests\Nominal\Departments\GetDepartment;
use Selectco\SageApi\Requests\Nominal\Departments\GetDepartments;
use Selectco\SageApi\Requests\Nominal\Departments\PostDepartment;
use Selectco\SageApi\Requests\Nominal\Departments\PutDepartment;
use Selectco\SageApi\Requests\Nominal\Departments\PutDepartments;

class DepartmentsResource
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
	public function getDepartments(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetDepartments($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putDepartments(): Response
	{
		return $this->connector->send(new PutDepartments());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postDepartment(): Response
	{
		return $this->connector->send(new PostDepartment());
	}


	/**
	 * @param float|int $id Unique Id of the department.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getDepartment(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetDepartment($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the department.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putDepartment(float|int $id): Response
	{
		return $this->connector->send(new PutDepartment($id));
	}


	/**
	 * @param float|int $id Unique Id of the department.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteDepartment(float|int $id): Response
	{
		return $this->connector->send(new DeleteDepartment($id));
	}
}
