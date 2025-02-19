<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A period on a budget profile where a percentage of the annual budget can be set.
 */
class NominalPeriodBudgetProfile
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $accounting_period_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null   $period_number = null,
		#[Assert\Type('float')]
		public float|null $budget_percent = null,
	) {
	}
}
