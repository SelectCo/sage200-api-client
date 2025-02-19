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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $accounting_period_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $period_number = null,
		#[Assert\Type('float')]
		public ?float $budget_percent = null,
	) {
	}
}
