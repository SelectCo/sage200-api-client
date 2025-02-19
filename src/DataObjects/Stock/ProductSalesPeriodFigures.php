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
		public ?string $start_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $end_date = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public ?string $period = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public ?string $year = null,
		#[Assert\Type('float')]
		public ?float $quantity_sold = null,
		#[Assert\Type('float')]
		public ?float $value_sold = null,
		#[Assert\Type('float')]
		public ?float $average_selling_price = null,
		#[Assert\Type('float')]
		public ?float $cost_of_sale_value = null,
		#[Assert\Type('float')]
		public ?float $profit_value = null,
		#[Assert\Type('float')]
		public ?float $profit_percent = null,
	) {
	}
}
