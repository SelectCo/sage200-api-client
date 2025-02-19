<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The confirm despatch records the despatch of goods and services from sales order lines to your
 * customers.
 */
class SopDespatchReceiptItem
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_return_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $item_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $unit_description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $selling_unit_description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('float')]
		public ?float $line_quantity = null,
		#[Assert\Type('float')]
		public ?float $despatch_receipt_quantity = null,
		#[Assert\Type('float')]
		public ?float $outstanding_quantity = null,
		#[Assert\Type('float')]
		public ?float $available_quantity = null,
		#[Assert\Type('float')]
		public ?float $traceable_available_quantity = null,
		#[Assert\Type('float')]
		public ?float $line_unit_precision = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_precision = null,
		#[Assert\Type('float')]
		public ?float $selling_unit_multiple = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_multiple = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $product_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $traceable_type = null,
		#[Assert\Type('bool')]
		public ?bool $sale_from_single_batch = null,
		#[Assert\Type('bool')]
		public ?bool $has_traceable_allocations = null,
		#[Assert\Type('bool')]
		public ?bool $is_multiple_bin_allocations = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $document_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $promised_delivery_date = null,
		#[Assert\Type('array')]
		public ?array $bin_items = null,
		#[Assert\Type('array')]
		public ?array $traceable_adjustment_items = null,
	) {
	}
}
