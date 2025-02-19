<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The picking list report can be printed to support the sales order despatch process. Each item on the
 * picking list can be set to 'show', 'hide' or 'exclude' from the picking list.<br /><br />The API
 * endpoint returns details of the display options for picking list items.
 */
class SopShowOnPickingListType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $value = null,
	) {
	}
}
