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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $nominal_account_year_value_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $accounting_period_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $period_number = null,
		#[Assert\Type('float')]
		public ?float $original_budget_value = null,
		#[Assert\Type('float')]
		public ?float $budget_value = null,
		#[Assert\Type('float')]
		public ?float $period_balance = null,
		#[Assert\Type('float')]
		public ?float $adjustment_after_year_end_close = null,
		#[Assert\Type('float')]
		public ?float $consolidated_amount = null,
		#[Assert\Type('bool')]
		public ?bool $is_future_period = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
