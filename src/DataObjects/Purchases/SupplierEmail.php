<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact specific email addresses can be queried, or updated in isolation, separate to the rest of
 * the supplier contact details. Calling this resource doesn't return, or update any other supplier
 * contact fields.
 */
class SupplierEmail
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public string|null $email = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_contact_id = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_delete = null,
		#[Assert\Type('object')]
		public object|null $supplier_contact = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
