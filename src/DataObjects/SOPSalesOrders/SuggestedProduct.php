<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of product information returned by a search for suggested products
 */
class SuggestedProduct
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $description = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $number_orders_appears = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_sales_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $last_order_number = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $source = null,
		#[Assert\Type('float')]
		public float|null  $quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $quantity_unit = null,
		#[Assert\Type('float')]
		public float|null  $price = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $price_unit = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $traceable_type_id = null,
	) {
	}
}
