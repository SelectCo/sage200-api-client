<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\StocktakeCountSheetItems\GetStocktakeCountSheetItems;
use Selectco\SageApi\Requests\Stock\StocktakeCountSheetItems\PutStocktakeCountSheetItems;

class StocktakeCountSheetItemsResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param float|int $id Unique Id of the stocktake count sheet item.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getStocktakeCountSheetItems(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetStocktakeCountSheetItems($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the stocktake count sheet item.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putStocktakeCountSheetItems(float|int $id): Response
	{
		return $this->connector->send(new PutStocktakeCountSheetItems($id));
	}
}
