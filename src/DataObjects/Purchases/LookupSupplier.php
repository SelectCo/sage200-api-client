<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of supplier information for populating a lookup.
 */
class LookupSupplier
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $short_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $account_status_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public ?string $post_code = null,
	) {
	}
}
