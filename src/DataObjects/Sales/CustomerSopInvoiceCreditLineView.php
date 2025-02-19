<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of related customers, sales invoice credits, sales invoice credit
 * lines, invoice line profit analysis, products, and product groups that can be queried on any field.
 * The default sort (orderby) fields are by 'sop_invoice_credit_id' and 'sop_invoice_credit_line_id'
 * descending.
 */
class CustomerSopInvoiceCreditLineView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_invoice_credit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_invoice_credit_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_invoice_credit_document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_invoice_credit_document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_invoice_credit_document_status = null,
		#[Assert\Type('float')]
		public ?float $sop_invoice_credit_exchange_rate = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_invoice_credit_date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_invoice_credit_line_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_invoice_credit_line_invoice_credit_date = null,
		#[Assert\Type('float')]
		public ?float $sop_invoice_credit_line_total_value = null,
		#[Assert\Type('float')]
		public ?float $sop_invoice_credit_line_tax_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_invoice_credit_line_date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $invoice_line_profit_analysis_id = null,
		#[Assert\Type('float')]
		public ?float $invoice_line_profit_analysis_line_quantity = null,
		#[Assert\Type('float')]
		public ?float $invoice_line_profit_analysis_realised_cost_value = null,
		#[Assert\Type('float')]
		public ?float $invoice_line_profit_analysis_realised_profit_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $invoice_line_profit_analysis_date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $product_name = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $product_description = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $product_date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $product_group_code = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $product_group_description = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $product_group_date_time_updated = null,
	) {
	}
}
