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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $financial_year_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $year_relative_to_current_year = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $budget_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $budget_profile_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $budget_profile = null,
		#[Assert\Type('float')]
		public ?float $original_budget_value = null,
		#[Assert\Type('float')]
		public ?float $budget_value = null,
		#[Assert\Type('float')]
		public ?float $adjustment_after_year_end_close = null,
		#[Assert\Type('float')]
		public ?float $closing_balance = null,
		#[Assert\Type('array')]
		public ?array $period_balances = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
