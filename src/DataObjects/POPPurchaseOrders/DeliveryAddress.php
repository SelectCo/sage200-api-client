<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The delivery address.
 */
class DeliveryAddress
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $postal_name = null,
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
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $country = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $postcode = null,
		#[Assert\Type('string'), Assert\Length(max: 235)]
		public string|null $contact = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $telephone_number = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $fax_number = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $email_address = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $country_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $tax_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $tax_code_id = null,
		#[Assert\Type('object')]
		public object|null $country_code = null,
		#[Assert\Type('object')]
		public object|null $tax_code = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
