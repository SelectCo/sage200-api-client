<?php

namespace Selectco\SageApi\Requests\General\PendingEmails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeletePendingEmail
 *
 * Delete single pending email for use with Microsoft Flow.
 */
class DeletePendingEmail extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the pending email.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/pending_emails/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
