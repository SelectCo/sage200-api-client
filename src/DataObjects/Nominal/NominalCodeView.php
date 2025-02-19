<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns the details of all nominal codes. The default sort (orderby) fields are by
 * 'reference', 'cost_centre_code' and 'department_code' ascending.
 */
class NominalCodeView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $reference = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $cost_centre_id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $cost_centre_code = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $department_id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $department_code = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $nominal_account_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $account_status_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $report_category_id = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public ?string $report_category_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $report_category_description = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $report_category_report_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sofa_category_id = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public ?string $sofa_category_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sofa_category_description = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sofa_category_report_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $year_value_budget_type_id = null,
		#[Assert\Type('float')]
		public ?float $year_value_budget_value = null,
		#[Assert\Type('float')]
		public ?float $year_value_original_budget_value = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $report_category_budget_name = null,
		#[Assert\Type('bool')]
		public ?bool $allow_manual_journal_entries = null,
		#[Assert\Type('bool')]
		public ?bool $use_batch_postings = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $periods_to_keep_transactions = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $consolidated_nominal_account_number = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $consolidated_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $consolidated_nominal_department = null,
		#[Assert\Type('float')]
		public ?float $consolidated_adjustment = null,
		#[Assert\Type('bool')]
		public ?bool $display_balances_in_selection_list = null,
		#[Assert\Type('float')]
		public ?float $balance_year_to_date = null,
		#[Assert\Type('float')]
		public ?float $debit_year_to_date = null,
		#[Assert\Type('float')]
		public ?float $credit_year_to_date = null,
		#[Assert\Type('float')]
		public ?float $brought_forward_balance = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_20 = null,
	) {
	}
}
