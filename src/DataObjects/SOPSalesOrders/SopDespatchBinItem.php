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
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $bin_name = null,
		#[Assert\Type('float')]
		public ?float $available_quantity = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
	) {
	}
}
