<?php

namespace Selectco\SageApi\Resource\General;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\General\FlowStates\DeleteFlowState;
use Selectco\SageApi\Requests\General\FlowStates\GetFlowState;
use Selectco\SageApi\Requests\General\FlowStates\GetFlowStates;
use Selectco\SageApi\Requests\General\FlowStates\PostFlowState;
use Selectco\SageApi\Requests\General\FlowStates\PutFlowState;

class FlowStatesResource
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
	public function getFlowStates(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetFlowStates($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postFlowState(): Response
	{
		return $this->connector->send(new PostFlowState());
	}


	/**
	 * @param float|int $id Unique Id of the flow.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getFlowState(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetFlowState($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the flow state.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putFlowState(float|int $id): Response
	{
		return $this->connector->send(new PutFlowState($id));
	}


	/**
	 * @param float|int $id Unique Id of the flow state.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteFlowState(float|int $id): Response
	{
		return $this->connector->send(new DeleteFlowState($id));
	}
}
