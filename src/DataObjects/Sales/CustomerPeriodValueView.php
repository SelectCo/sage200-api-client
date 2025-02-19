<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Includes customer values (total invoices, total credit notes, total cash, etc.) for a period of a
 * financial year held for the company. A company always has five future financial years and can have
 * unlimited previous years, depending on how long the company has been operating.
 */
class CustomerPeriodValueView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_analysis_code_5 = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_period_value_id = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_invoice_value_to_date = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_credit_note_value_to_date = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_cash_value_to_date = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_profit_value_to_date = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_invoice_value_to_date_in_base = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_cred_note_value_to_date_in_base = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_cash_value_to_date_in_base = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_profit_value_to_date_in_base = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $period_value_exchange_rate_gain_or_loss = null,
		#[Assert\Type('float')]
		public ?float $period_value_total_finance_charges_applied = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_analysis_period_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $analysis_period_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $analysis_period_start_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $analysis_period_end_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $period_value_date_time_updated = null,
	) {
	}
}
