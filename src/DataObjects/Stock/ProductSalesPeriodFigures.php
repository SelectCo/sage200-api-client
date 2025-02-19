<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sales period trading figures.
 */
class ProductSalesPeriodFigures
{
	public function __construct(
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $start_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $end_date = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $period = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $year = null,
		#[Assert\Type('float')]
		public float|null  $quantity_sold = null,
		#[Assert\Type('float')]
		public float|null  $value_sold = null,
		#[Assert\Type('float')]
		public float|null  $average_selling_price = null,
		#[Assert\Type('float')]
		public float|null  $cost_of_sale_value = null,
		#[Assert\Type('float')]
		public float|null  $profit_value = null,
		#[Assert\Type('float')]
		public float|null  $profit_percent = null,
	) {
	}
}
