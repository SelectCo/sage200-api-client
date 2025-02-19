<?php

namespace Selectco\SageApi\Requests\Stock\BinHoldings;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteBinHolding
 *
 * Delete a single bin holding resource by supplying a bin holding Id.
 */
class DeleteBinHolding extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the bin holding.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/bin_holdings/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
