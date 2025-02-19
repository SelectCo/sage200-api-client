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
		public ?int $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $product_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $selling_unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $selling_unit = null,
		#[Assert\Type('float')]
		public ?float $selling_unit_multiple = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pricing_unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $pricing_unit = null,
		#[Assert\Type('float')]
		public ?float $pricing_unit_multiple = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public ?string $currency_symbol = null,
		#[Assert\Type('float')]
		public ?float $unit_price = null,
		#[Assert\Type('float')]
		public ?float $discounted_unit_price = null,
		#[Assert\Type('float')]
		public ?float $total_price_before_discount = null,
		#[Assert\Type('float')]
		public ?float $total_discount = null,
		#[Assert\Type('float')]
		public ?float $total_discounted_price = null,
		#[Assert\Type('bool')]
		public ?bool $include_previous_prices = null,
		#[Assert\Type('array')]
		public ?array $previous_prices = null,
	) {
	}
}
