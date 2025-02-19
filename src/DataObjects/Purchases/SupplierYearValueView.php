<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Includes supplier values (total invoices, total credit notes, total cash, etc.) for a financial year
 * held for the company. A company always has five future financial years and can have unlimited
 * previous years, depending on how long the company has been operating.
 */
class SupplierYearValueView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $supplier_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_analysis_code_5 = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_year_value_id = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_invoice_value_to_date = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_credit_note_value_to_date = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_cash_value_to_date = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_profit_value_to_date = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_invoice_value_to_date_in_base = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_cred_note_value_to_date_in_base = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_cash_value_to_date_in_base = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_profit_value_to_date_in_base = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $year_value_exchange_rate_gain_or_loss = null,
		#[Assert\Type('float')]
		public float|null  $year_value_total_finance_charges_applied = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $financial_year_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $financial_year_start_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $financial_year_end_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $year_relative_to_current_year = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $number_of_periods_in_year = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $year_value_date_time_updated = null,
	) {
	}
}
