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
		public ?int $id = null,
		#[Assert\Type('bool')]
		public ?bool $electronic_bank_payments = null,
		#[Assert\Type('bool')]
		public ?bool $allow_batch_processing = null,
		#[Assert\Type('bool')]
		public ?bool $auto_generate_account_numbers = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $next_account_number = null,
		#[Assert\Type('bool')]
		public ?bool $allow_additional_trans_analysis = null,
		#[Assert\Type('bool')]
		public ?bool $use_transaction_date_for_allocation = null,
		#[Assert\Type('bool')]
		public ?bool $capture_additional_transaction_details = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $early_settlement_discount_days = null,
		#[Assert\Type('float')]
		public ?float $early_settlement_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $keep_transactions_for = null,
		#[Assert\Type('bool')]
		public ?bool $archive_transaction_after_keeping = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $maximum_enquiry_transactions_to_display = null,
		#[Assert\Type('bool')]
		public ?bool $show_outstanding_transactions = null,
		#[Assert\Type('float')]
		public ?float $max_cheque_value = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $default_tax_code_id = null,
		#[Assert\Type('bool')]
		public ?bool $default_terms_agreed = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $no_of_reporting_periods = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $default_payment_terms_basis = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $default_payment_terms_days = null,
		#[Assert\Type('bool')]
		public ?bool $use_account_periods_as_trading_periods = null,
		#[Assert\Type('array')]
		public ?array $ageing_periods = null,
		#[Assert\Type('array')]
		public ?array $overdue_periods = null,
		#[Assert\Type('bool')]
		public ?bool $revalue_foreign_entries = null,
		#[Assert\Type('bool')]
		public ?bool $use_invoice_authorisation = null,
		#[Assert\Type('float')]
		public ?float $authorisation_threshold_value = null,
		#[Assert\Type('bool')]
		public ?bool $all_accounts_use_same_payment_method = null,
		#[Assert\Type('object')]
		public ?object $default_tax_code = null,
		#[Assert\Type('array')]
		public ?array $payment_groups = null,
		#[Assert\Type('object')]
		public ?object $organisation_supplier_payment_group = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
