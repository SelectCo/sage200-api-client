<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a list of traceable items for a product and bin.
 */
class StockTransferTraceableItemsRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null $bin_holding_from_id = null,
	) {
	}
}
