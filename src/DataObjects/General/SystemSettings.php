<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The System Settings are used to define operation and transaction settings.<br/><br/>Operational
 * settings includes setting such as the next VAT return date and number of open accounting periods.
 * Transaction settings gives options to use additional transaction analysis and whether to validate
 * transaction dates.
 */
class SystemSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $next_urn = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $next_invoice_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $next_credit_note_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $next_journal_entry_number = null,
		#[Assert\Type('bool')]
		public ?bool $first_vat_return_date_defined = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $first_vat_return_date = null,
		#[Assert\Type('float')]
		public ?float $intrastat_value_for_consolidation = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $number_open_periods = null,
		#[Assert\Type('bool')]
		public ?bool $update_nominal_online = null,
		#[Assert\Type('bool')]
		public ?bool $use_cost_centre_breakdown = null,
		#[Assert\Type('bool')]
		public ?bool $use_intrastat_reporting = null,
		#[Assert\Type('bool')]
		public ?bool $use_period_exchange_rates = null,
		#[Assert\Type('bool')]
		public ?bool $use_segmented_address = null,
		#[Assert\Type('bool')]
		public ?bool $use_additional_trans_analysis = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $transaction_analysis_heading = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $accounting_period_validation_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $financial_year_end_date = null,
		#[Assert\Type('bool')]
		public ?bool $invoice_credit_note_same_numbers = null,
		#[Assert\Type('float')]
		public ?float $reverse_charge_minimum_value = null,
		#[Assert\Type('object')]
		public ?object $transaction_date_validation = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
