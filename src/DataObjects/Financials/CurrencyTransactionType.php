<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Currency transaction types are used to determine processing to acquire the exchange rate. Currency
 * transaction type can be 'CurrencyTransactionCash' or 'CurrencyTransactionNonCash'.<P>The API
 * endpoint returns details of the currency transaction types that can be used.</P>
 */
class CurrencyTransactionType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
