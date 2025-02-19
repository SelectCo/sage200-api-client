<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A bin item for a non-traceable stock item being despatched.
 */
class SopDespatchBinItem
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $bin_name = null,
		#[Assert\Type('float')]
		public float|null  $available_quantity = null,
		#[Assert\Type('float')]
		public float|null  $quantity = null,
	) {
	}
}
