<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a list of sales orders ready for despatch.<br /><br />This endpoint only supports filtering
 * on the following fields: confirmation_intent_type, trader_id, warehouse_id, document_no and
 * document_date.
 */
class SopDespatchDiscreteOrder
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $trader_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $trader_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $document_no = null,
		#[Assert\Type('float')]
		public float|null  $document_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $document_date = null,
	) {
	}
}
