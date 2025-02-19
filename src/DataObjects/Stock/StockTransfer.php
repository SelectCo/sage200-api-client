<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A stock transfer is used to move stock from one location to another.
 */
class StockTransfer
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bin_holding_from_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bin_holding_to_id = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $second_reference = null,
		#[Assert\Type('array')]
		public ?array $traceable_adjustment_items = null,
	) {
	}
}
