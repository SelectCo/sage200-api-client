<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Customer and Supplier contacts can have one or more roles defined.<br /><br />Use this API endpoint
 * to read from the Trader Contact Roles.
 */
class TraderContactRole
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $role = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default_role = null,
		#[Assert\Type('bool')]
		public bool|null   $is_mandatory = null,
		#[Assert\Type('bool')]
		public bool|null   $use_for_customer_accounts = null,
		#[Assert\Type('bool')]
		public bool|null   $use_for_supplier_accounts = null,
		#[Assert\Type('bool')]
		public bool|null   $use_with_documents = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
