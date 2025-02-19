<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of purchase orders and returns and invoices and credit notes
 */
class PopOrderReturnInvoiceCreditView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_document_type_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $pop_order_return_document_date = null,
		#[Assert\Type('string')]
		public ?string $pop_order_return_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_document_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_authorisation_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_document_print_status_id = null,
		#[Assert\Type('string')]
		public ?string $pop_order_return_supplier_document_no = null,
		#[Assert\Type('float')]
		public ?float $pop_order_return_total_net_value = null,
		#[Assert\Type('float')]
		public ?float $pop_order_return_total_tax_value = null,
		#[Assert\Type('float')]
		public ?float $pop_order_return_total_gross_value = null,
		#[Assert\Type('float')]
		public ?float $pop_order_return_total_accrual_value = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string')]
		public ?string $supplier_name = null,
		#[Assert\Type('string')]
		public ?string $supplier_reference = null,
		#[Assert\Type('string')]
		public ?string $supplier_short_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_invoice_credit_line_id = null,
		#[Assert\Type('string')]
		public ?string $pop_invoice_credit_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_invoice_credit_type_id = null,
	) {
	}
}
