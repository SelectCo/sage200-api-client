<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A traceable adjustment describes the traceable items which take part in Stock adjustments. (Sage 200
 * Professional only).
 */
class TraceableAdjustment
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $issue_status = null,
		#[Assert\Type('array')]
		public array|null  $traceable_adjustment_items = null,
	) {
	}
}
