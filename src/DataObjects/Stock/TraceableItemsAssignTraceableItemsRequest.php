<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a list of unassigned traceable items for a product.
 */
class TraceableItemsAssignTraceableItemsRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
	) {
	}
}
