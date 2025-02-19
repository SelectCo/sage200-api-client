<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\ProductMemos\DeleteProductMemo;
use Selectco\SageApi\Requests\Stock\ProductMemos\GetProductMemo;
use Selectco\SageApi\Requests\Stock\ProductMemos\GetProductMemos;
use Selectco\SageApi\Requests\Stock\ProductMemos\PostProductMemo;
use Selectco\SageApi\Requests\Stock\ProductMemos\PutProductMemo;

class ProductMemosResource
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
	public function getProductMemos(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetProductMemos($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postProductMemo(): Response
	{
		return $this->connector->send(new PostProductMemo());
	}


	/**
	 * @param float|int $id Unique Id of the product memo.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getProductMemo(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetProductMemo($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the product memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putProductMemo(float|int $id): Response
	{
		return $this->connector->send(new PutProductMemo($id));
	}


	/**
	 * @param float|int $id Unique Id of the product memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteProductMemo(float|int $id): Response
	{
		return $this->connector->send(new DeleteProductMemo($id));
	}
}
