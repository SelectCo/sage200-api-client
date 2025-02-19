<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The (sales) order line linked to the purchase order line.
 */
class PopLinkedOrderLine
{
	public function __construct(
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $linked_order_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $customer_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $document_no = null,
		#[Assert\Type('float')]
		public float|null  $stock_unit_required_quantity = null,
		#[Assert\Type('float')]
		public float|null  $stock_unit_despatched_quantity = null,
		#[Assert\Type('float')]
		public float|null  $stock_unit_outstanding_quantity = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_unlink = null,
	) {
	}
}
