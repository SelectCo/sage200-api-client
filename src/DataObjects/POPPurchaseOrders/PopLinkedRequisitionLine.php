<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The requisition line linked to the purchase order line.
 */
class PopLinkedRequisitionLine
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $supplier_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $supplier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public ?string $item_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $budget_name = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
	) {
	}
}
