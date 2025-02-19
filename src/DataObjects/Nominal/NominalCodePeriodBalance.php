<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A single period of a nominal code's financial year where budgets can be entered and balances can be
 * viewed.
 */
class NominalCodePeriodBalance
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_account_year_value_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $accounting_period_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $period_number = null,
		#[Assert\Type('float')]
		public float|null  $original_budget_value = null,
		#[Assert\Type('float')]
		public float|null  $budget_value = null,
		#[Assert\Type('float')]
		public float|null  $period_balance = null,
		#[Assert\Type('float')]
		public float|null  $adjustment_after_year_end_close = null,
		#[Assert\Type('float')]
		public float|null  $consolidated_amount = null,
		#[Assert\Type('bool')]
		public bool|null   $is_future_period = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
