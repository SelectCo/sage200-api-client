<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a location record for a product. There is no default sort (orderby). (Sage 200
 * Professional only).
 */
class TraceableItemLocationRecord
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $traceable_bin_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bin_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $bin_name = null,
		#[Assert\Type('float')]
		public ?float $free_stock_available = null,
		#[Assert\Type('float')]
		public ?float $bin_quantity_in_stock = null,
	) {
	}
}
