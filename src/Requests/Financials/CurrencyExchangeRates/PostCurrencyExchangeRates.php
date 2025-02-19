<?php

namespace Selectco\SageApi\Requests\Financials\CurrencyExchangeRates;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCurrencyExchangeRates
 *
 * Returns the currency exchange rates that have been specified within the application.
 */
class PostCurrencyExchangeRates extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/currency_exchange_rates";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
