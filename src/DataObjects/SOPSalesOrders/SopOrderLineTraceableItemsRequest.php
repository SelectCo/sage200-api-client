<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a list of traceable items for a product associated with the sales order line.
 */
class SopOrderLineTraceableItemsRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $activity_date = null,
		#[Assert\Type('bool')]
		public ?bool $is_read_only = null,
	) {
	}
}
