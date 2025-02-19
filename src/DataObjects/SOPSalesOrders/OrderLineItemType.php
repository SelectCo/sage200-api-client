<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This specifies whether entry of standard, free text or both line types are allowed.
 */
class OrderLineItemType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
