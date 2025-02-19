<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A bin item for a traceable stock item being despatched.
 */
class SopDespatchTraceableBinItem
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $id = null,
		#[Assert\Type('float')]
		public float|null $available_quantity = null,
		#[Assert\Type('float')]
		public float|null $quantity = null,
	) {
	}
}
