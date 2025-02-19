<?php

namespace Selectco\SageApi\Requests\General\SystemSettings;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSystemSetting
 *
 * Update the system settings.
 */
class PutSystemSetting extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the system settings.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/system_settings/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
