<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of customer information for populating a lookup.
 */
class LookupCustomer
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $short_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $account_status_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $post_code = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $office_type_id = null,
	) {
	}
}
