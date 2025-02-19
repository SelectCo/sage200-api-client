<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Purchase orders can be generated using Generate Purchase Orders, or if using Sage 200 Manufacturing,
 * via MRP (Material Requirements Planning). <br /><br />The API endpoint returns details of the
 * generation types which determine how a Purchase order can be generated.
 */
class PopOrderGenerationType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $value = null,
	) {
	}
}
