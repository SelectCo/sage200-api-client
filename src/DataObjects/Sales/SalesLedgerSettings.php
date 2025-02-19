<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The Sales Ledger settings are used to configure application behaviour with respect to the Sales
 * Ledger module.<br/><br/>Settings include whether to automatically generate customer account numbers,
 * the customer default tax code, etc.
 */
class SalesLedgerSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('bool')]
		public bool|null   $copy_statements_for_head_offices = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_batch_processing = null,
		#[Assert\Type('bool')]
		public bool|null   $auto_generate_account_numbers = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $next_account_number = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_additional_trans_analysis = null,
		#[Assert\Type('bool')]
		public bool|null   $use_card_processing = null,
		#[Assert\Type('bool')]
		public bool|null   $use_transaction_date_for_allocation = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $early_settlement_discount_days = null,
		#[Assert\Type('float')]
		public float|null  $early_settlement_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $keep_transactions_for = null,
		#[Assert\Type('bool')]
		public bool|null   $archive_transaction_after_keeping = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $maximum_enquiry_transactions_to_display = null,
		#[Assert\Type('bool')]
		public bool|null   $show_outstanding_transactions = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $tax_recovery_period = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $default_tax_code_id = null,
		#[Assert\Type('bool')]
		public bool|null   $default_terms_agreed = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $no_of_reporting_periods = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $default_payment_terms_basis = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $default_payment_terms_days = null,
		#[Assert\Type('bool')]
		public bool|null   $use_account_periods_as_trading_periods = null,
		#[Assert\Type('array')]
		public array|null  $ageing_periods = null,
		#[Assert\Type('array')]
		public array|null  $overdue_periods = null,
		#[Assert\Type('bool')]
		public bool|null   $revalue_foreign_entries = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $statement_terms = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $statement_ageing_terms = null,
		#[Assert\Type('bool')]
		public bool|null   $charge_interest_on_finance_charges = null,
		#[Assert\Type('object')]
		public object|null $default_tax_code = null,
		#[Assert\Type('array')]
		public array|null  $finance_charges = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
