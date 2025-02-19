<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\Suppliers\DeleteSupplier;
use Selectco\SageApi\Requests\Purchases\Suppliers\GetSupplier;
use Selectco\SageApi\Requests\Purchases\Suppliers\GetSuppliers;
use Selectco\SageApi\Requests\Purchases\Suppliers\PostSupplier;
use Selectco\SageApi\Requests\Purchases\Suppliers\PostSuppliersNew;
use Selectco\SageApi\Requests\Purchases\Suppliers\PutSupplier;

class SuppliersResource
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
	public function getSuppliers(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSuppliers($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplier(): Response
	{
		return $this->connector->send(new PostSupplier());
	}


	/**
	 * @param float|int $id Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplier(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplier($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplier(float|int $id): Response
	{
		return $this->connector->send(new PutSupplier($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplier(float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplier($id));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSuppliersNew(): Response
	{
		return $this->connector->send(new PostSuppliersNew());
	}
}
