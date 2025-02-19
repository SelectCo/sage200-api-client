<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Purchase period trading figures.
 */
class ProductPurchasePeriodFigures
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
		public float|null  $quantity_bought = null,
		#[Assert\Type('float')]
		public float|null  $value_bought = null,
		#[Assert\Type('float')]
		public float|null  $average_buying_price = null,
	) {
	}
}
