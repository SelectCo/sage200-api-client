<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact specific telephone numbers can be queried, or updated in isolation, separate to the rest of
 * the customer contact details. Calling this resource doesn't return, or update any other customer
 * contact fields.
 */
class CustomerTelephone
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public ?string $full_number = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public ?string $country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public ?string $subscriber_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_contact_id = null,
		#[Assert\Type('bool')]
		public ?bool $is_default = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('object')]
		public ?object $customer_contact = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
