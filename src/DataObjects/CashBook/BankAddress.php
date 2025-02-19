<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bank address.
 */
class BankAddress
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $country = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $county = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public ?string $postcode = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
