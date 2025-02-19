<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A set of search options for returning a list of suggested products.
 */
class SuggestedProductOptions
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_id = null,
		#[Assert\Type('bool')]
		public ?bool $show_frequent_items = null,
		#[Assert\Type('bool')]
		public ?bool $show_recent_items = null,
		#[Assert\Type('bool')]
		public ?bool $show_preferred_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $number_of_days_for_frequent_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $number_of_days_for_recent_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $minimum_number_of_lines_for_frequent_items = null,
	) {
	}
}
