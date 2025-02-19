<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

class SopOrderReturnLineProfit
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_profit_analysis_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_return_line_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $item_description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $traceable_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $line_type = null,
		#[Assert\Type('float')]
		public float|null  $estimated_cost_rate = null,
		#[Assert\Type('float')]
		public float|null  $estimated_profit_percent_on_revenue = null,
		#[Assert\Type('float')]
		public float|null  $estimated_profit_percent_on_cost = null,
		#[Assert\Type('float')]
		public float|null  $estimated_profit_value = null,
		#[Assert\Type('float')]
		public float|null  $issue_rate = null,
		#[Assert\Type('float')]
		public float|null  $line_quantity = null,
		#[Assert\Type('float')]
		public float|null  $realised_cost_rate = null,
		#[Assert\Type('float')]
		public float|null  $realised_cost_value = null,
		#[Assert\Type('float')]
		public float|null  $realised_profit_percent_on_revenue = null,
		#[Assert\Type('float')]
		public float|null  $realised_profit_percent_on_cost = null,
		#[Assert\Type('float')]
		public float|null  $realised_profit_value = null,
		#[Assert\Type('float')]
		public float|null  $realised_quantity = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
