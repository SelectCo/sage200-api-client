<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Financial statement layouts are designed to provide a clear representation of your accounts. This
 * resource returns the details of all financial statement layouts. The default sort (orderby) field
 * are by 'financial_report_layout_id' and 'financial_report_row_report_row' ascending.
 */
class FinancialReportLayoutView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $financial_report_layout_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $financial_report_layout_account_report_type = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $financial_report_layout_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $financial_report_row_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $financial_report_row_line_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $financial_report_row_layout_position_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $financial_report_row_layout_debit_or_credit_type = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_report_row = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $financial_report_row_title = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $financial_report_row_subtotal_group = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_1 = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_2 = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_3 = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_4 = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_5 = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_6 = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_7 = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_8 = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $financial_report_row_group_break_9 = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_account_report_category_id = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $nominal_account_report_category_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $nominal_account_report_category_description = null,
	) {
	}
}
