<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The ageing type for aged transactions. Ageing type can be 'TransactionDate', 'DueDate', or
 * 'CalendarMonth'.<P>The API endpoint returns details of the ageing types that can be used.</P>
 */
class AgedBalancesAgeingType
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
