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
		public int|null    $currency_from_id = null,
		#[Assert\Type('float')]
		public float|null  $currency_from_rate = null,
		#[Assert\Type('float')]
		public float|null  $currency_from_value = null,
		#[Assert\Type('bool')]
		public bool|null   $currency_from_is_amendable = null,
		#[Assert\Type('bool')]
		public bool|null   $currency_from_no_periods = null,
		#[Assert\Type('bool')]
		public bool|null   $currency_from_is_expired = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_to_id = null,
		#[Assert\Type('float')]
		public float|null  $currency_to_rate = null,
		#[Assert\Type('float')]
		public float|null  $currency_to_value = null,
		#[Assert\Type('bool')]
		public bool|null   $currency_to_is_amendable = null,
		#[Assert\Type('bool')]
		public bool|null   $currency_to_no_periods = null,
		#[Assert\Type('bool')]
		public bool|null   $currency_to_is_expired = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $exchange_rate_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $currency_transaction_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
		#[Assert\Type('object')]
		public object|null $currency_from = null,
		#[Assert\Type('object')]
		public object|null $currency_to = null,
		#[Assert\Type('object')]
		public object|null $currency_base = null,
		#[Assert\Type('object')]
		public object|null $currency_euro = null,
	) {
	}
}
