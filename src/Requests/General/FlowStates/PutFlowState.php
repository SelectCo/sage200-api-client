<?php

namespace Selectco\SageApi\Requests\General\FlowStates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutFlowState
 *
 * Update state for Microsoft Flow.
 */
class PutFlowState extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the flow state.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/flow_states/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
