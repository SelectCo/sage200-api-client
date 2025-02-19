<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Supplier contacts can be assigned job roles. Supplier contact roles describe roles assigned to a
 * supplier contact, including whether the contact is the preferred contact for the supplier for a
 * role.
 */
class SupplierContactRole
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_contact_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $trader_contact_role_id = null,
		#[Assert\Type('bool')]
		public bool|null   $is_preferred_contact_for_role = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_delete = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
