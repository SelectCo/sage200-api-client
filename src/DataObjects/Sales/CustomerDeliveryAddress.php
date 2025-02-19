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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('bool')]
		public ?bool $is_default = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $postal_name = null,
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
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $country = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $address_country_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 235)]
		public ?string $contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $fax = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $email = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $tax_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $tax_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $country_code_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
		#[Assert\Type('object')]
		public ?object $customer = null,
		#[Assert\Type('object')]
		public ?object $address_country_code = null,
		#[Assert\Type('object')]
		public ?object $tax_code = null,
		#[Assert\Type('object')]
		public ?object $country_code = null,
	) {
	}
}
