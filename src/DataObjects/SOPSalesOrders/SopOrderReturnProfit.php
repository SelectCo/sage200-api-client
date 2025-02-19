<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

class SopOrderReturnProfit
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_return_id = null,
		#[Assert\Type('float')]
		public ?float $estimated_cost_value = null,
		#[Assert\Type('float')]
		public ?float $estimated_profit_percent_on_revenue = null,
		#[Assert\Type('float')]
		public ?float $estimated_profit_percent_on_cost = null,
		#[Assert\Type('float')]
		public ?float $estimated_profit_value = null,
		#[Assert\Type('float')]
		public ?float $issue_value = null,
		#[Assert\Type('float')]
		public ?float $realised_cost_value = null,
		#[Assert\Type('float')]
		public ?float $realised_issue_value = null,
		#[Assert\Type('float')]
		public ?float $realised_profit_percent_on_revenue = null,
		#[Assert\Type('float')]
		public ?float $realised_profit_percent_on_cost = null,
		#[Assert\Type('float')]
		public ?float $realised_profit_value = null,
		#[Assert\Type('bool')]
		public ?bool $simple_profit_calculation_only = null,
		#[Assert\Type('array')]
		public ?array $stock_item_order_lines = null,
		#[Assert\Type('array')]
		public ?array $other_order_lines = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
