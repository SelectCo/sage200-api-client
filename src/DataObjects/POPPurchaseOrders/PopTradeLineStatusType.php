<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The trade line status is used to determine the invoice/credit or despatch/receipt status of an order
 * line. Values cam be 'None', 'Partially' or 'Fully'.
 */
class PopTradeLineStatusType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
