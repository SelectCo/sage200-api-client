<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a list of assigned traceable items for a product that can be amended.
 */
class TraceableItemsAmendTraceableItemsRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null $product_id = null,
	) {
	}
}
