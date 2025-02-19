<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Credit bureaus are third party companies used to assess credit risk.
 */
class CreditBureau
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $website = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $checking_url = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
