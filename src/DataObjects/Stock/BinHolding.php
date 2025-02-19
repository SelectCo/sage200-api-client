<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bins allow you to specify a place in a Warehouse where stock is stored such as a shelf or aisle.
 * Every Warehouse has a single Bin created by default called 'Unspecified'. If you don't want to use
 * bins with your warehouses, all items are stored in the 'Unspecified' bin. You can rename the
 * 'Unspecified' bin to something more meaningful for your company.
 */
class BinHolding
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_holding_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $allocation_priority = null,
		#[Assert\Type('float')]
		public ?float $quantity_reserved = null,
		#[Assert\Type('float')]
		public ?float $unconfirmed_qty_in_stock = null,
		#[Assert\Type('float')]
		public ?float $confirmed_qty_in_stock = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated_sop = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated_stock = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated_bom = null,
		#[Assert\Type('float')]
		public ?float $quantity_in_stock = null,
		#[Assert\Type('float')]
		public ?float $quantity_in_stock_less_reserved = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated = null,
		#[Assert\Type('float')]
		public ?float $free_stock_available = null,
		#[Assert\Type('float')]
		public ?float $free_stock_available_less_reserved = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_stocktake = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_10 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_1 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_2 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_3 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_4 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_5 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_6 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_7 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_8 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_9 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_10 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_1 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_2 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_3 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_4 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_5 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_1 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_2 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_3 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_4 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_5 = null,
		#[Assert\Type('object')]
		public ?object $product = null,
		#[Assert\Type('object')]
		public ?object $warehouse_holding = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
