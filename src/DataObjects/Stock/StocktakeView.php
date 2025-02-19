<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gets the collection of stocktakes including warehouse name. The default sort (orderby) field is by
 * 'stocktake_name' ascending.
 */
class StocktakeView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $stocktake_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $stocktake_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $stocktake_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $stocktake_status_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
