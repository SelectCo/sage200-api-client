<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The confirm despatch records the despatch of goods and services from sales order lines to your
 * customers.<br/><br/>A GET request will return a collection of sales order lines available to
 * despatch and can be filtered on the following fields: confirmation_intent_type, trader_id,
 * warehouse_id, document_no and document_date.<br/><br/>In Sage 200 Professional the
 * confirmation_intent_type can be included in the query filter to determine if you are despatching
 * goods (ConfirmOnDespatch) or services (Confirm). If omitted from the query filter, this value will
 * default to ConfirmOnDespatch and return locked sales order goods to despatch.
 */
class SopConfirmDespatchAdjustment
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_return_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $despatch_receipt_date = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $confirmation_intent_type = null,
		#[Assert\Type('array')]
		public array|null  $items = null,
		#[Assert\Type('array')]
		public array|null  $tracking_items = null,
	) {
	}
}
