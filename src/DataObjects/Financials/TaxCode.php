<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tax codes are normally used for UK business VAT Rates. They are accessed by Sage 200 modules in
 * order to: <ul><li>- Analyse the rates to Nominal Ledger accounts.</li><li>- Analyse the rates to the
 * VAT Return.</li><li>- Read percentages for calculations in transactions.</li></ul>The API endpoint
 * returns details of the tax codes that can be used.
 */
class TaxCode
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('float')]
		public float|null  $tax_rate = null,
		#[Assert\Type('string'), Assert\Length(max: 54)]
		public string|null $terms = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $terms_description = null,
		#[Assert\Type('bool')]
		public bool|null   $is_notional_acquisition_tax = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
