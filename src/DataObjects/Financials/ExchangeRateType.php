<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Exchange rates may change on a daily basis so, a company will configure exchange rates according to
 * their best method for updating. Exchange rates can be configured as 'Single' or 'Period', according
 * to the company preference.<P>The API endpoint returns details of the exchange rate types that can be
 * used.</P>
 */
class ExchangeRateType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $value = null,
	) {
	}
}
