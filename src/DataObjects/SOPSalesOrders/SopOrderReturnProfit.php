<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

class SopOrderReturnProfit
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_return_id = null,
		#[Assert\Type('float')]
		public float|null  $estimated_cost_value = null,
		#[Assert\Type('float')]
		public float|null  $estimated_profit_percent_on_revenue = null,
		#[Assert\Type('float')]
		public float|null  $estimated_profit_percent_on_cost = null,
		#[Assert\Type('float')]
		public float|null  $estimated_profit_value = null,
		#[Assert\Type('float')]
		public float|null  $issue_value = null,
		#[Assert\Type('float')]
		public float|null  $realised_cost_value = null,
		#[Assert\Type('float')]
		public float|null  $realised_issue_value = null,
		#[Assert\Type('float')]
		public float|null  $realised_profit_percent_on_revenue = null,
		#[Assert\Type('float')]
		public float|null  $realised_profit_percent_on_cost = null,
		#[Assert\Type('float')]
		public float|null  $realised_profit_value = null,
		#[Assert\Type('bool')]
		public bool|null   $simple_profit_calculation_only = null,
		#[Assert\Type('array')]
		public array|null  $stock_item_order_lines = null,
		#[Assert\Type('array')]
		public array|null  $other_order_lines = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
