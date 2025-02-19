<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A bin item adjustment describes the bin items for the sales order line for despatch for
 * non-traceable, multiple bin stock items.
 */
class SopConfirmDespatchBinItemsAdjustment
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $id = null,
		#[Assert\Type('array')]
		public array|null $bin_items = null,
	) {
	}
}
