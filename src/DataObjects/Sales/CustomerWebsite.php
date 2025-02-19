<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact specific websites can be queried, or updated in isolation, separate to the rest of the
 * customer contact details. Calling this resource doesn't return, or update any other customer contact
 * fields.
 */
class CustomerWebsite
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public string|null $website = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_contact_id = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_delete = null,
		#[Assert\Type('object')]
		public object|null $customer_contact = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
