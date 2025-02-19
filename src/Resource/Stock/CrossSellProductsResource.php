<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\CrossSellProducts\DeleteCrossSellProduct;
use Selectco\SageApi\Requests\Stock\CrossSellProducts\GetCrossSellProduct;
use Selectco\SageApi\Requests\Stock\CrossSellProducts\GetCrossSellProducts;
use Selectco\SageApi\Requests\Stock\CrossSellProducts\PostCrossSellProduct;
use Selectco\SageApi\Requests\Stock\CrossSellProducts\PutCrossSellProduct;

class CrossSellProductsResource
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
	public function getCrossSellProducts(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCrossSellProducts($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCrossSellProduct(): Response
	{
		return $this->connector->send(new PostCrossSellProduct());
	}


	/**
	 * @param float|int $id Unique Id of the cross sell product.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCrossSellProduct(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCrossSellProduct($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the cross sell product.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCrossSellProduct(float|int $id): Response
	{
		return $this->connector->send(new PutCrossSellProduct($id));
	}


	/**
	 * @param float|int $id Unique Id of the cross sell product.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCrossSellProduct(float|int $id): Response
	{
		return $this->connector->send(new DeleteCrossSellProduct($id));
	}
}
