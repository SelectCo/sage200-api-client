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
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $description = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $number_orders_appears = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_sales_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $last_order_number = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public ?string $source = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $quantity_unit = null,
		#[Assert\Type('float')]
		public ?float $price = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $price_unit = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $traceable_type_id = null,
	) {
	}
}
