<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of sales orders and returns and invoices and credit notes.
 */
class SopOrderReturnInvoiceCreditView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_return_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_return_document_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_order_return_document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_order_return_document_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_return_document_status_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $sop_order_return_customer_document_no = null,
		#[Assert\Type('float')]
		public ?float $sop_order_return_total_net_value = null,
		#[Assert\Type('float')]
		public ?float $sop_order_return_total_tax_value = null,
		#[Assert\Type('float')]
		public ?float $sop_order_return_total_gross_value = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $customer_short_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_invoice_credit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_invoice_credit_document_no = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_invoice_credit_type_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_invoice_credit_document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_invoice_credit_document_status_id = null,
		#[Assert\Type('float')]
		public ?float $sop_invoice_credit_total_net_value = null,
		#[Assert\Type('float')]
		public ?float $sop_invoice_credit_total_tax_value = null,
		#[Assert\Type('float')]
		public ?float $sop_invoice_credit_total_gross_value = null,
	) {
	}
}
