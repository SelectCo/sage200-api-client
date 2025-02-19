<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A product transaction is created each time a product is moved in, or out of stock. Product
 * transactions are created from various sources such as purchase orders, sales orders, transfers
 * between warehouses etc.. This resource returns the details of product transactions. The default sort
 * (orderby) field is by 'Id' descending.
 */
class ProductTransactionView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $product_group_code = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $transaction_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $transaction_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $transaction_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $source_area_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $source_area_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $source_area_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $second_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $bin_name = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('float')]
		public ?float $unit_cost_price = null,
		#[Assert\Type('float')]
		public ?float $unit_issue_price = null,
		#[Assert\Type('float')]
		public ?float $unit_discount_value = null,
		#[Assert\Type('float')]
		public ?float $total_order_discount = null,
		#[Assert\Type('float')]
		public ?float $cost_value = null,
		#[Assert\Type('float')]
		public ?float $issue_value = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $memo = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $user_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_20 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
