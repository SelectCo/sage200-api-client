<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The currency exchange rates that have been specified within the application.
 */
class CurrencyExchangeRate
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $currency_from_id = null,
		#[Assert\Type('float')]
		public ?float $currency_from_rate = null,
		#[Assert\Type('float')]
		public ?float $currency_from_value = null,
		#[Assert\Type('bool')]
		public ?bool $currency_from_is_amendable = null,
		#[Assert\Type('bool')]
		public ?bool $currency_from_no_periods = null,
		#[Assert\Type('bool')]
		public ?bool $currency_from_is_expired = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $currency_to_id = null,
		#[Assert\Type('float')]
		public ?float $currency_to_rate = null,
		#[Assert\Type('float')]
		public ?float $currency_to_value = null,
		#[Assert\Type('bool')]
		public ?bool $currency_to_is_amendable = null,
		#[Assert\Type('bool')]
		public ?bool $currency_to_no_periods = null,
		#[Assert\Type('bool')]
		public ?bool $currency_to_is_expired = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $exchange_rate_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $currency_transaction_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('object')]
		public ?object $currency_from = null,
		#[Assert\Type('object')]
		public ?object $currency_to = null,
		#[Assert\Type('object')]
		public ?object $currency_base = null,
		#[Assert\Type('object')]
		public ?object $currency_euro = null,
	) {
	}
}
