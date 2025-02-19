<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Exchange rate amendability types are used to allow control when and where a currency can be changed
 * within the application. Currencies can be configured as 'Not Amendable', 'Amendable - Cash Postings
 * Only', 'Amendable - All' or 'Fixed to Euro'.<P>The API endpoint returns details of the exchange rate
 * amendability types that can be used.</P>
 */
class ExchangeRateAmendabilityType
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
