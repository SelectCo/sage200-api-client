<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nominal accounts are fundamental to the successful management of company finances. The value of
 * every transaction entered into Sage 200 is posted to a nominal account and, is where the revenue and
 * expenditure of the business is recorded.<P>Nominal accounts include a code, and cost centre and a
 * department.</P><P>The API endpoint returns details of the nominal codes that can be used.</P>
 */
class NominalCode
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
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $nominal_account_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $account_status_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $report_category_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sofa_category_id = null,
		#[Assert\Type('bool')]
		public ?bool $display_balances_in_selection_list = null,
		#[Assert\Type('float')]
		public ?float $balance_year_to_date = null,
		#[Assert\Type('float')]
		public ?float $debit_balance_year_to_date = null,
		#[Assert\Type('float')]
		public ?float $credit_balance_year_to_date = null,
		#[Assert\Type('float')]
		public ?float $brought_forward_balance = null,
		#[Assert\Type('bool')]
		public ?bool $allow_manual_journal_entries = null,
		#[Assert\Type('bool')]
		public ?bool $use_batch_postings = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $periods_to_keep_transactions = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $consolidated_nominal_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $consolidated_nominal_account_number = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $consolidated_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $consolidated_nominal_department = null,
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
		#[Assert\Type('object')]
		public ?object $consolidated_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $cost_centre = null,
		#[Assert\Type('object')]
		public ?object $department = null,
		#[Assert\Type('object')]
		public ?object $report_category = null,
		#[Assert\Type('object')]
		public ?object $sofa_category = null,
		#[Assert\Type('array')]
		public ?array $financial_years = null,
		#[Assert\Type('array')]
		public ?array $memos = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
