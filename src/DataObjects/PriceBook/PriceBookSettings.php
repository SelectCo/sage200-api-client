<?php

namespace Selectco\SageApi\DataObjects\PriceBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The Price Book settings are used to configure application behaviour with respect to the Price Book
 * module.<br/><br/>Settings include the pricing discounts.
 */
class PriceBookSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('bool')]
		public bool|null   $use_limited_price_bands = null,
		#[Assert\Type('bool')]
		public bool|null   $use_customer_discount_groups = null,
		#[Assert\Type('bool')]
		public bool|null   $use_stock_item_discounts = null,
		#[Assert\Type('bool')]
		public bool|null   $use_product_group_discounts = null,
		#[Assert\Type('bool')]
		public bool|null   $use_quantity_based_discounts = null,
		#[Assert\Type('bool')]
		public bool|null   $use_order_value_discounts = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
