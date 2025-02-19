<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\SupplierMemos\DeleteSupplierMemo;
use Selectco\SageApi\Requests\Purchases\SupplierMemos\GetSupplierMemo;
use Selectco\SageApi\Requests\Purchases\SupplierMemos\GetSupplierMemos;
use Selectco\SageApi\Requests\Purchases\SupplierMemos\GetSupplierMemosForSupplier;
use Selectco\SageApi\Requests\Purchases\SupplierMemos\PostSupplierMemo;
use Selectco\SageApi\Requests\Purchases\SupplierMemos\PutSupplierMemo;

class SupplierMemosResource
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
	public function getSupplierMemos(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierMemos($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierMemo(): Response
	{
		return $this->connector->send(new PostSupplierMemo());
	}


	/**
	 * @param float|int $id Unique Id of the supplier memo.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierMemo(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierMemo($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierMemo(float|int $id): Response
	{
		return $this->connector->send(new PutSupplierMemo($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierMemo(float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierMemo($id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierMemosForSupplier(
		float|int $supplierId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierMemosForSupplier($supplierId, $queryParameters));
	}
}
