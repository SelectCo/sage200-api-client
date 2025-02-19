<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a list of bin items for the sales order line for despatch for non-traceable, multiple bin
 * stock items.
 */
class SopConfirmDespatchBinItemsRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
	) {
	}
}
