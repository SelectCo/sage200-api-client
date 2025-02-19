<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The company's address.
 */
class Address
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $county = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $postcode = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $country = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
