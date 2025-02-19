<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of warehouses for a product. This view filters out the return and
 * direct delivery warehouses. The default sort (orderby) field is by 'warehouse_name' ascending.
 */
class ProductWarehouseView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_holding_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('bool')]
		public ?bool $use_for_sales_trading = null,
		#[Assert\Type('float')]
		public ?float $free_stock_quantity = null,
	) {
	}
}
