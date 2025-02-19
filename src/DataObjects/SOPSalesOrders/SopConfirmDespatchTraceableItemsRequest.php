<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a list of traceable items for a product associated with the sales order line for despatch.
 */
class SopConfirmDespatchTraceableItemsRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null $id = null,
	) {
	}
}
