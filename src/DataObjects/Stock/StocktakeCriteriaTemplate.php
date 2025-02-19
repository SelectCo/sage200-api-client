<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stocktake criteria templates are a set of criteria used for auto selection of stock items to add to
 * a stocktake sheet.
 */
class StocktakeCriteriaTemplate
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_sold_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $due_date = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $stocktake_traceable_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $stock_value_type = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $stock_value_number_of_items = null,
		#[Assert\Type('float')]
		public float|null  $quantity_from = null,
		#[Assert\Type('float')]
		public float|null  $quantity_to = null,
		#[Assert\Type('array')]
		public array|null  $product_groups = null,
	) {
	}
}
