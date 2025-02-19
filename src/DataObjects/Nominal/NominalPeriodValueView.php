<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns the details of all accounting period nominal values for all financial years
 * held for the company. A company always has five future financial years and can have unlimited
 * previous years, depending on how long the company has been operating. The default sort (orderby)
 * field are by 'accounting_period_end_date', 'accounting_period_period_number' and 'nominal_code_id'
 * descending.
 */
class NominalPeriodValueView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_code_account_number_cost_centre_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_code_cost_centre_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_code_department_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $nominal_code_account_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_code_report_category_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $nominal_code_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $nominal_code_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $nominal_code_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $nominal_code_department = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $nominal_code_account_status_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_period_value_id = null,
		#[Assert\Type('float')]
		public float|null  $nominal_period_value_budget_value = null,
		#[Assert\Type('float')]
		public float|null  $nominal_period_value_actual_value = null,
		#[Assert\Type('float')]
		public float|null  $nominal_period_value_adjustment_after_year_end_close = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $accounting_period_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $accounting_period_period_number = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $accounting_period_start_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $accounting_period_end_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $financial_year_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $financial_year_start_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $year_relative_to_current_year = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $number_of_periods_in_year = null,
	) {
	}
}
