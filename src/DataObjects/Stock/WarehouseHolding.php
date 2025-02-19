<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * All stock within Sage 200 regardless of type (Stock, Service/labour, or Miscellaneous), require a
 * holding location. The location indicates where an item is stored and the stock level settings for
 * each product in the warehouse i.e. the re-order level, the minimum and maximum stock levels. <br
 * /><br />Items with a type of 'Stock' have levels recorded for each warehouse location and the levels
 * are used when allocating, issuing and receiving stock. <br /><br />If the stock setting
 * UseMultipleLocations is true, a product can be linked to multiple warehouse holdings. You cannot
 * delete the last warehouse holding associated with a product.
 */
class WarehouseHolding
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default_manufacturing_warehouse = null,
		#[Assert\Type('float')]
		public float|null  $reorder_level = null,
		#[Assert\Type('float')]
		public float|null  $minimum_level = null,
		#[Assert\Type('float')]
		public float|null  $maximum_level = null,
		#[Assert\Type('float')]
		public float|null  $quantity_reserved = null,
		#[Assert\Type('float')]
		public float|null  $confirmed_qty_in_stock = null,
		#[Assert\Type('float')]
		public float|null  $unconfirmed_qty_in_stock = null,
		#[Assert\Type('float')]
		public float|null  $quantity_in_stock = null,
		#[Assert\Type('float')]
		public float|null  $quantity_in_stock_less_reserved = null,
		#[Assert\Type('float')]
		public float|null  $quantity_on_order = null,
		#[Assert\Type('float')]
		public float|null  $quantity_allocated_stock = null,
		#[Assert\Type('float')]
		public float|null  $quantity_allocated_sop = null,
		#[Assert\Type('float')]
		public float|null  $quantity_allocated_bom = null,
		#[Assert\Type('float')]
		public float|null  $quantity_allocated = null,
		#[Assert\Type('float')]
		public float|null  $free_stock_available = null,
		#[Assert\Type('float')]
		public float|null  $free_stock_available_less_reserved = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_delete = null,
		#[Assert\Type('object')]
		public object|null $product = null,
		#[Assert\Type('object')]
		public object|null $warehouse = null,
		#[Assert\Type('array')]
		public array|null  $bin_holdings = null,
		#[Assert\Type('object')]
		public object|null $status = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
