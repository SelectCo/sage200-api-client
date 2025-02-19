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
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_return_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $customer_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $item_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $unit_description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $selling_unit_description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('float')]
		public float|null  $quantity = null,
		#[Assert\Type('float')]
		public float|null  $line_quantity = null,
		#[Assert\Type('float')]
		public float|null  $despatch_receipt_quantity = null,
		#[Assert\Type('float')]
		public float|null  $outstanding_quantity = null,
		#[Assert\Type('float')]
		public float|null  $available_quantity = null,
		#[Assert\Type('float')]
		public float|null  $traceable_available_quantity = null,
		#[Assert\Type('float')]
		public float|null  $line_unit_precision = null,
		#[Assert\Type('float')]
		public float|null  $stock_unit_precision = null,
		#[Assert\Type('float')]
		public float|null  $selling_unit_multiple = null,
		#[Assert\Type('float')]
		public float|null  $stock_unit_multiple = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $product_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $traceable_type = null,
		#[Assert\Type('bool')]
		public bool|null   $sale_from_single_batch = null,
		#[Assert\Type('bool')]
		public bool|null   $has_traceable_allocations = null,
		#[Assert\Type('bool')]
		public bool|null   $is_multiple_bin_allocations = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $document_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $promised_delivery_date = null,
		#[Assert\Type('array')]
		public array|null  $bin_items = null,
		#[Assert\Type('array')]
		public array|null  $traceable_adjustment_items = null,
	) {
	}
}
