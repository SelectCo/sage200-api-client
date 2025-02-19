<?php

namespace Selectco\SageApi\Requests\General\FlowStates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteFlowState
 *
 * Delete state for Microsoft Flow.
 */
class DeleteFlowState extends Request
{
	protected Method $method = Method::DELETE;
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
