<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\NominalReportCategories\DeleteNominalReportCategory;
use Selectco\SageApi\Requests\Nominal\NominalReportCategories\GetNominalReportCategories;
use Selectco\SageApi\Requests\Nominal\NominalReportCategories\GetNominalReportCategory;
use Selectco\SageApi\Requests\Nominal\NominalReportCategories\PostNominalReportCategory;
use Selectco\SageApi\Requests\Nominal\NominalReportCategories\PutNominalReportCategory;

class NominalReportCategoriesResource
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
	public function getNominalReportCategories(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalReportCategories($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postNominalReportCategory(): Response
	{
		return $this->connector->send(new PostNominalReportCategory());
	}


	/**
	 * @param float|int $id Unique Id of the nominal report category.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getNominalReportCategory(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalReportCategory($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the nominal report category.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putNominalReportCategory(float|int $id): Response
	{
		return $this->connector->send(new PutNominalReportCategory($id));
	}


	/**
	 * @param float|int $id Unique Id of the product.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteNominalReportCategory(float|int $id): Response
	{
		return $this->connector->send(new DeleteNominalReportCategory($id));
	}
}
