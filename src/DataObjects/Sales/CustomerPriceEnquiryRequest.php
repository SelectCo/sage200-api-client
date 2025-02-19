<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns the price of a product, and any available discount, for the specified customer. This
 * includes any discounts based on the quantity specified. In Sage 200, product prices are set on price
 * bands and then linked to customer accounts. Discounts are set per product, or product group and then
 * linked to customer accounts.
 */
class CustomerPriceEnquiryRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $product_id = null,
		#[Assert\Type('float')]
		public float|null $quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $selling_unit_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $pricing_unit_id = null,
		#[Assert\Type('bool')]
		public bool|null  $include_previous_prices = null,
	) {
	}
}
