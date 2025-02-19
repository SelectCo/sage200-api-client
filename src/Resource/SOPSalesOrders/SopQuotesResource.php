<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes\DeleteSopquote;
use Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes\GetSopquote;
use Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes\GetSopquotes;
use Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes\PostSopquote;
use Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes\PostSopquotesNew;
use Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes\PutSopquote;
use Selectco\SageApi\Requests\SOPSalesOrders\SopQuotes\PutSopquoteNew;

class SopQuotesResource
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
	public function getSopquotes(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopquotes($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSopquote(): Response
	{
		return $this->connector->send(new PostSopquote());
	}


	/**
	 * @param float|int $id Unique Id of the sales quote.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSopquote(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopquote($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the sales quote.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSopquote(float|int $id): Response
	{
		return $this->connector->send(new PutSopquote($id));
	}


	/**
	 * @param float|int $id Unique Id of the sales quote.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSopquote(float|int $id): Response
	{
		return $this->connector->send(new DeleteSopquote($id));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSopquotesNew(): Response
	{
		return $this->connector->send(new PostSopquotesNew());
	}


	/**
	 * @param float|int $id Unique Id of the sales quote.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSopquoteNew(float|int $id): Response
	{
		return $this->connector->send(new PutSopquoteNew($id));
	}
}
