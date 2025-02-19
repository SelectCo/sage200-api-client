<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns the details of all accounting periods for all financial years held for the
 * company. A company always has five future financial years and can have unlimited previous years,
 * depending on how long the company has been operating. The default sort (orderby) field are by
 * 'financial_year_start_date' and 'period_number' ascending.
 */
class FinancialYearPeriodView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $financial_year_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $financial_year_start_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $financial_year_end_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $year_relative_to_current_year = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $number_of_periods_in_year = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $accounting_period_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $period_number = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $period_start_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $period_end_date = null,
	) {
	}
}
