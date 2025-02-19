<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of warehouses and bins for a product. This view filters out the return
 * and direct delivery warehouses. The default sort (orderby) field are by 'warehouse_name' and
 * 'bin_holding_name' ascending.
 */
class ProductWarehouseBinView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bin_holding_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $bin_holding_name = null,
	) {
	}
}
