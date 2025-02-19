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
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_code_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $period_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public string|null $narrative = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $transaction_analysis_code = null,
		#[Assert\Type('float')]
		public float|null  $debit = null,
		#[Assert\Type('float')]
		public float|null  $credit = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $user_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $source = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $urn = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $accounting_period_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $financial_year_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $financial_year_start_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $year_relative_to_current_year = null,
		#[Assert\Type('array')]
		public array|null  $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $bank_items = null,
		#[Assert\Type('array')]
		public array|null  $tax_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $trade_items = null,
	) {
	}
}
