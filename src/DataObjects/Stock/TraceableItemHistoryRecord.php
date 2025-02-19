<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a movement history record for a product. There is no default sort (orderby).
 * (Sage 200 Professional only).
 */
class TraceableItemHistoryRecord
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $trader_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $trader_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sales_purchase_order_no = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $despatch_receipt_grn_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $received_issued_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $received_issued_by = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $transaction_history_type = null,
		#[Assert\Type('float')]
		public float|null  $received_issued_quantity = null,
	) {
	}
}
