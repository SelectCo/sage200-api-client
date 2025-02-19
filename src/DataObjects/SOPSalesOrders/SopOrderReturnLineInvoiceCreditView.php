<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of sales orders and returns and invoices and credit notes for a line.
 */
class SopOrderReturnLineInvoiceCreditView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_invoice_credit_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_return_line_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_invoice_credit_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_invoice_credit_type_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_invoice_credit_document_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_invoice_credit_document_status_id = null,
		#[Assert\Type('float')]
		public float|null  $sop_invoice_credit_line_invoice_credit_quantity = null,
	) {
	}
}
