<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns the price of a product, and any available discount, for the specified customer. This
 * includes any discounts based on the quantity specified. In Sage 200, product prices are set on price
 * bands and then linked to customer accounts. Discounts are set per product, or product group and then
 * linked to customer accounts.
 */
class CustomerPriceEnquiry
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $product_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $selling_unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $selling_unit = null,
		#[Assert\Type('float')]
		public float|null  $selling_unit_multiple = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pricing_unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $pricing_unit = null,
		#[Assert\Type('float')]
		public float|null  $pricing_unit_multiple = null,
		#[Assert\Type('float')]
		public float|null  $quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $currency_symbol = null,
		#[Assert\Type('float')]
		public float|null  $unit_price = null,
		#[Assert\Type('float')]
		public float|null  $discounted_unit_price = null,
		#[Assert\Type('float')]
		public float|null  $total_price_before_discount = null,
		#[Assert\Type('float')]
		public float|null  $total_discount = null,
		#[Assert\Type('float')]
		public float|null  $total_discounted_price = null,
		#[Assert\Type('bool')]
		public bool|null   $include_previous_prices = null,
		#[Assert\Type('array')]
		public array|null  $previous_prices = null,
	) {
	}
}
