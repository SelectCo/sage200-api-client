<?php

namespace Selectco\SageApi\DataObjects\PriceBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A price band is simply a price list. They're used to offer different prices to different customers.
 * Product prices are set in the each price band. The price a customer receives for a product depends
 * on the price band their account is linked to.
 */
class PriceBand
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $description = null,
		#[Assert\Type('bool')]
		public bool|null   $is_standard_band = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $price_band_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $price_band_type = null,
		#[Assert\Type('bool')]
		public bool|null   $is_active = null,
		#[Assert\Type('bool')]
		public bool|null   $is_time_based = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $active_date_time_from = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $active_date_time_to = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
