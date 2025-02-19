<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns traceable item details for a product traceable history record. (Sage 200
 * Professional only).
 */
class ProductTransactionTraceableItemHistoryRecord
{
	public function __construct(
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $identification_no = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $additional_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sell_by_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $use_by_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $bin_name = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
	) {
	}
}
