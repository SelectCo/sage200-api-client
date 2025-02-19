<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The Stock Settings are used to choose how to process and manage your stock.
 */
class StockSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('bool')]
		public ?bool $use_multiple_locations = null,
		#[Assert\Type('bool')]
		public ?bool $use_search_categories = null,
		#[Assert\Type('bool')]
		public ?bool $integrate_stock_management_with_nominal = null,
		#[Assert\Type('bool')]
		public ?bool $generate_cos_for_sop = null,
		#[Assert\Type('bool')]
		public ?bool $allow_negative_stocktake = null,
		#[Assert\Type('bool')]
		public ?bool $allow_negative_stocktake_with_purchase_order = null,
		#[Assert\Type('bool')]
		public ?bool $profit_percent_of_revenue = null,
		#[Assert\Type('bool')]
		public ?bool $record_numbers_on_goods_received = null,
		#[Assert\Type('bool')]
		public ?bool $allocate_individual_items = null,
		#[Assert\Type('bool')]
		public ?bool $allow_fulfilment_from_stock = null,
		#[Assert\Type('bool')]
		public ?bool $allow_fulfilment_from_supplier_via_stock = null,
		#[Assert\Type('bool')]
		public ?bool $allow_fulfilment_from_supplier_direct_to_customer = null,
		#[Assert\Type('bool')]
		public ?bool $use_landed_costs = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $landed_costs_nominal_code_id = null,
		#[Assert\Type('array')]
		public ?array $internal_areas = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
