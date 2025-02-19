<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sage 200 works in multiple currencies and each company can configure up to 99 currencies to use.,
 * and   all can be configured to use a single exchange rate, period exchange rates, or both. One
 * currency must be configured as the base currency and this cannot be changed once transactions have
 * been entered.<P>If a currency is configured as amendable, the exchange rate can be modified when
 * entering transactions.</P>
 */
class Currency
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public ?string $symbol = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $name = null,
		#[Assert\Type('float')]
		public ?float $core_currency_rate = null,
		#[Assert\Type('float')]
		public ?float $euro_currency_rate = null,
		#[Assert\Type('bool')]
		public ?bool $is_base_currency = null,
		#[Assert\Type('bool')]
		public ?bool $is_euro_currency = null,
		#[Assert\Type('bool')]
		public ?bool $use_for_new_accounts = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $exchange_rate_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $exchange_rate_amendability_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $currency_iso_code_id = null,
		#[Assert\Type('object')]
		public ?object $currency_iso_code = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
