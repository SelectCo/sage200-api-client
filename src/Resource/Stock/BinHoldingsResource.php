<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\BinHoldings\DeleteBinHolding;
use Selectco\SageApi\Requests\Stock\BinHoldings\GetBinHolding;
use Selectco\SageApi\Requests\Stock\BinHoldings\GetBinHoldings;
use Selectco\SageApi\Requests\Stock\BinHoldings\GetBinHoldingsForProduct;
use Selectco\SageApi\Requests\Stock\BinHoldings\GetBinHoldingsForWarehouseHolding;
use Selectco\SageApi\Requests\Stock\BinHoldings\PostBinHolding;
use Selectco\SageApi\Requests\Stock\BinHoldings\PutBinHolding;

class BinHoldingsResource
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
	public function getBinHoldings(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetBinHoldings($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postBinHolding(): Response
	{
		return $this->connector->send(new PostBinHolding());
	}


	/**
	 * @param float|int $id Unique Id of the bin holding.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getBinHolding(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetBinHolding($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the bin holding.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putBinHolding(float|int $id): Response
	{
		return $this->connector->send(new PutBinHolding($id));
	}


	/**
	 * @param float|int $id Unique Id of the bin holding.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteBinHolding(float|int $id): Response
	{
		return $this->connector->send(new DeleteBinHolding($id));
	}


	/**
	 * @param float|int $warehouseHoldingId Unique Id of the warehouse holding.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getBinHoldingsForWarehouseHolding(
        float|int             $warehouseHoldingId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetBinHoldingsForWarehouseHolding($warehouseHoldingId, $queryParameters));
	}


	/**
	 * @param float|int $productId Unique Id of the product.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getBinHoldingsForProduct(float|int $productId, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetBinHoldingsForProduct($productId, $queryParameters));
	}
}
