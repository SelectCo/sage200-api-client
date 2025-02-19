<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of product information for populating a lookup.
 */
class LookupProduct
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('float')]
		public ?float $free_stock_quantity = null,
		#[Assert\Type('bool')]
		public ?bool $record_nos_on_goods_received = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bom_item_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $traceable_type_id = null,
		#[Assert\Type('bool')]
		public ?bool $this_is_the_sop_product_group = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_type_id = null,
		#[Assert\Type('bool')]
		public ?bool $allow_sales_order = null,
	) {
	}
}
