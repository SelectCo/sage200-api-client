<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sales trading figures are the quantities and value of goods sold in base currency. These figures are
 * available if a stock item is set to maintain a movement history. Trading figures are not available
 * for phantom BOM built items.<P>This endpoint has custom filtering on the following fields:
 * 'no_of_periods', 'warehouse_name', 'source_area_reference' and analysis codes 1-20
 * (analysis_code_n).</P>
 */
class ProductSalesFigures
{
	public function __construct(
		#[Assert\Type('float')]
		public ?float $quantity_sold_this_period = null,
		#[Assert\Type('float')]
		public ?float $value_sold_this_period = null,
		#[Assert\Type('float')]
		public ?float $quantity_sold_last_period = null,
		#[Assert\Type('float')]
		public ?float $value_sold_last_period = null,
		#[Assert\Type('array')]
		public ?array $periods = null,
	) {
	}
}
