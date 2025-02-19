<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of purchase orders and returns and receipts and returns for a line.
 */
class PopOrderReturnLineReceiptReturnView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_receipt_return_line_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $pop_receipt_return_line_receipt_return_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $pop_receipt_return_line_receipt_return_date = null,
		#[Assert\Type('float')]
		public ?float $pop_receipt_return_line_receipt_return_quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_receipt_return_line_user_number = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $pop_receipt_return_line_user_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_receipt_return_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $pop_receipt_return_supplier_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_line_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $pop_order_return_line_buying_unit_description = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_invoice_credit_status_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $pop_receipt_return_line_invoiced = null,
	) {
	}
}
