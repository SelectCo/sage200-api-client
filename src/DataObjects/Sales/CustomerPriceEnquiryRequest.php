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
		public ?int $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $selling_unit_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pricing_unit_id = null,
		#[Assert\Type('bool')]
		public ?bool $include_previous_prices = null,
	) {
	}
}
