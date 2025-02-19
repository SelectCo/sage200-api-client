<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Purchase trading figures are the quantities and value of goods bought in base currency. These
 * figures are available if a stock item is set to maintain a movement history. Trading figures are not
 * available for phantom BOM built items.<P>This endpoint has custom filtering on the following fields:
 * 'no_of_periods', 'warehouse_name', 'source_area_reference' and analysis codes 1-20
 * (analysis_code_n).</P>
 */
class ProductPurchaseFigures
{
	public function __construct(
		#[Assert\Type('float')]
		public float|null $quantity_bought_this_period = null,
		#[Assert\Type('float')]
		public float|null $value_bought_this_period = null,
		#[Assert\Type('float')]
		public float|null $quantity_bought_last_period = null,
		#[Assert\Type('float')]
		public float|null $value_bought_last_period = null,
		#[Assert\Type('array')]
		public array|null $periods = null,
	) {
	}
}
