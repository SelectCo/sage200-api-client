<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The financial year breakdown for a nominal code where budgets can be entered and period balances can
 * be viewed.
 */
class NominalCodeFinancialYear
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $financial_year_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $year_relative_to_current_year = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $budget_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $budget_profile_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $budget_profile = null,
		#[Assert\Type('float')]
		public float|null  $original_budget_value = null,
		#[Assert\Type('float')]
		public float|null  $budget_value = null,
		#[Assert\Type('float')]
		public float|null  $adjustment_after_year_end_close = null,
		#[Assert\Type('float')]
		public float|null  $closing_balance = null,
		#[Assert\Type('array')]
		public array|null  $period_balances = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
