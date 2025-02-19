<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of purchase orders and returns and invoices and credit notes for a
 * line.
 */
class PopOrderReturnLineInvoiceCreditView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_invoice_credit_line_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_line_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $pop_invoice_credit_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_invoice_credit_type_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $pop_invoice_credit_document_date = null,
		#[Assert\Type('float')]
		public ?float $pop_invoice_credit_line_invoice_credit_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $line_unit_name = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_discounted_unit_price = null,
		#[Assert\Type('float')]
		public ?float $pop_invoice_credit_line_stock_unit_invoice_credit_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $stock_unit_name = null,
	) {
	}
}
