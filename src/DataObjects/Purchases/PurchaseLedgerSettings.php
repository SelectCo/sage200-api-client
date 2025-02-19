<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The Purchase Ledger settings are used to configure application behaviour with respect to the
 * Purchase Ledger module.<br/><br/>Settings include the maximum payment amount to be genarated, the
 * supplier default tax code, etc.
 */
class PurchaseLedgerSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('bool')]
		public bool|null   $electronic_bank_payments = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_batch_processing = null,
		#[Assert\Type('bool')]
		public bool|null   $auto_generate_account_numbers = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $next_account_number = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_additional_trans_analysis = null,
		#[Assert\Type('bool')]
		public bool|null   $use_transaction_date_for_allocation = null,
		#[Assert\Type('bool')]
		public bool|null   $capture_additional_transaction_details = null,
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
		#[Assert\Type('float')]
		public float|null  $max_cheque_value = null,
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
		#[Assert\Type('bool')]
		public bool|null   $use_invoice_authorisation = null,
		#[Assert\Type('float')]
		public float|null  $authorisation_threshold_value = null,
		#[Assert\Type('bool')]
		public bool|null   $all_accounts_use_same_payment_method = null,
		#[Assert\Type('object')]
		public object|null $default_tax_code = null,
		#[Assert\Type('array')]
		public array|null  $payment_groups = null,
		#[Assert\Type('object')]
		public object|null $organisation_supplier_payment_group = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
