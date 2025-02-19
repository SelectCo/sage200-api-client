<?php

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Financials\DocumentLayouts\GetDocumentLayout;
use Selectco\SageApi\Requests\Financials\DocumentLayouts\GetDocumentLayouts;

class DocumentLayoutsResource
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
	public function getDocumentLayouts(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetDocumentLayouts($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the document layout.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getDocumentLayout(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetDocumentLayout($id, $queryParameters));
	}
}
