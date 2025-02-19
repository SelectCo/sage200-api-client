<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product transaction group types are used to group the different (secondary) movement types of the
 * product within the application. Product transaction group types can be 'Allocation' ,'Goods Out'
 * ,'Goods In' ,'On POP Order'.<P>The API endpoint returns details of the product transaction group
 * types that can be used.</P>
 */
class ProductTransactionGroupType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
