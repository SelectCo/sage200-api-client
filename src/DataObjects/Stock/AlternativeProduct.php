<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Alternative products are suitable products that can be offered when a requested product is
 * unavailable. An alternative product can be the preferred alternative for a product. When stock is
 * issued for a sales order, if the product is unavailable, the preferred alternative can be chosen, if
 * stock is available.
 */
class AlternativeProduct
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $alternative_product_id = null,
		#[Assert\Type('bool')]
		public ?bool $is_preferred = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('object')]
		public ?object $alternative_product = null,
		#[Assert\Type('object')]
		public ?object $product = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
