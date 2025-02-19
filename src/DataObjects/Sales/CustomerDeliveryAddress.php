<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A customer can have multiple delivery addresses stored for their account which can be used when
 * creating an invoice or sales order.
 */
class CustomerDeliveryAddress
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $description = null,
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
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $postcode = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $country = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $address_country_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 235)]
		public string|null $contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $fax = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $email = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $tax_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $tax_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $country_code_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
		#[Assert\Type('object')]
		public object|null $customer = null,
		#[Assert\Type('object')]
		public object|null $address_country_code = null,
		#[Assert\Type('object')]
		public object|null $tax_code = null,
		#[Assert\Type('object')]
		public object|null $country_code = null,
	) {
	}
}
