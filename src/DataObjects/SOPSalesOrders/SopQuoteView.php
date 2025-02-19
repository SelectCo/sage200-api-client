<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns the details of all SOP quotes. The default sort (orderby) fields are by
 * 'document_no' and 'Id' ascending.
 */
class SopQuoteView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $document_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $document_status_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $customer_document_no = null,
		#[Assert\Type('float')]
		public float|null  $total_gross_value = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $order_no = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $proforma_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $customer_name = null,
	) {
	}
}
