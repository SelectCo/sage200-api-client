<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product suppliers are used to record suppliers of products. The supplier details are used when
 * creating purchase orders. A supplier can be the preferred supplier for a product. The preferred
 * supplier details are suggested when entering a purchase order for the product.
 */
class ProductSupplier
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $supplier_stock_code = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $lead_time = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $lead_time_unit = null,
		#[Assert\Type('float')]
		public ?float $usual_order_quantity = null,
		#[Assert\Type('float')]
		public ?float $minimum_order_quantity = null,
		#[Assert\Type('float')]
		public ?float $list_price = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_list_price_changed = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $list_price_expiry_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $default_pricing_source_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $landed_costs_type = null,
		#[Assert\Type('float')]
		public ?float $landed_costs_percentage = null,
		#[Assert\Type('float')]
		public ?float $landed_costs_per_item = null,
		#[Assert\Type('float')]
		public ?float $order_quantity_year_to_date = null,
		#[Assert\Type('float')]
		public ?float $order_value_year_to_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_order_date = null,
		#[Assert\Type('float')]
		public ?float $last_order_quantity = null,
		#[Assert\Type('float')]
		public ?float $last_buying_price = null,
		#[Assert\Type('float')]
		public ?float $quantity_on_order = null,
		#[Assert\Type('bool')]
		public ?bool $is_preferred = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $country_of_origin_id = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('object')]
		public ?object $country_of_origin = null,
		#[Assert\Type('object')]
		public ?object $product = null,
		#[Assert\Type('object')]
		public ?object $supplier = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
