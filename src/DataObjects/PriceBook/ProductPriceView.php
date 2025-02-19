<?php

namespace Selectco\SageApi\DataObjects\PriceBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This returns the selling prices of your products. A price is returned for each price band associated
 * with a product.<br /><br />A price band is simply a price list. The price a customer receives for a
 * product depends on the price band their account is linked to. The 'Standard' price band is the
 * default.<br /><br />The prices returned here do not include any customer specific discounts. The
 * default sort (orderby) field is by 'product_code' ascending.
 */
class ProductPriceView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_price_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $product_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $product_stock_unit_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $price_band_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $price_band_name = null,
		#[Assert\Type('bool')]
		public bool|null   $product_price_use_standard = null,
		#[Assert\Type('float')]
		public float|null  $product_price_price = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $currency_symbol = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
