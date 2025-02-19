<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of product information for populating a lookup.
 */
class LookupProduct
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('float')]
		public float|null  $free_stock_quantity = null,
		#[Assert\Type('bool')]
		public bool|null   $record_nos_on_goods_received = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bom_item_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $traceable_type_id = null,
		#[Assert\Type('bool')]
		public bool|null   $this_is_the_sop_product_group = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_type_id = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_sales_order = null,
	) {
	}
}
