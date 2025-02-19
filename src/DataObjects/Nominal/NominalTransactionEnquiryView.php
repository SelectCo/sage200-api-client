<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nominal transaction enquiry views represent nominal transactions posted to the Nominal Ledger.
 */
class NominalTransactionEnquiryView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $nominal_code_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $period_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public ?string $narrative = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $transaction_analysis_code = null,
		#[Assert\Type('float')]
		public ?float $debit = null,
		#[Assert\Type('float')]
		public ?float $credit = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $user_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $source = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $urn = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $accounting_period_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $financial_year_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $financial_year_start_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $year_relative_to_current_year = null,
		#[Assert\Type('array')]
		public ?array $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $bank_items = null,
		#[Assert\Type('array')]
		public ?array $tax_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $trade_items = null,
	) {
	}
}
