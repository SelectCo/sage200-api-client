<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sales quotes are used to represent the quotation of a sale of goods or services to a customer. They
 * are central to a business and define the terms (price, quantity and times) by which the products or
 * services will be delivered.<br /><br />Note: Adding traceable items to sales quotes.<br/>If you're
 * using traceable stock items and an item is set to be sold from a single batch, then the quote
 * quantity must be less than or equal to quantity in the batch. If you try to order more than the
 * quantity in the batch, the quote cannot be posted via the API.<br /><br />Please note that as each
 * line is updated independently, as part of a PUT request, a failed line will return an error in the
 * API response body, however, all lines prior to this will be updated. Subsequent lines to the error
 * will not be posted.
 */
class SopQuote
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $customer_type = null,
		#[Assert\Type('bool')]
		public ?bool $is_draft = null,
		#[Assert\Type('bool')]
		public ?bool $is_editing = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_sequence_lines = null,
		#[Assert\Type('bool')]
		public ?bool $recalculate_prices = null,
		#[Assert\Type('bool')]
		public ?bool $apply_available_document_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $lock_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_delivery_address_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $despatch_receipt_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $invoice_credit_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $cancelled_status = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $currency_id = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('float')]
		public ?float $subtotal_goods_value = null,
		#[Assert\Type('float')]
		public ?float $subtotal_charge_net_value = null,
		#[Assert\Type('float')]
		public ?float $subtotal_charge_tax_value = null,
		#[Assert\Type('float')]
		public ?float $subtotal_discount_value = null,
		#[Assert\Type('float')]
		public ?float $total_net_value = null,
		#[Assert\Type('float')]
		public ?float $total_tax_value = null,
		#[Assert\Type('float')]
		public ?float $total_gross_value = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $customer_document_no = null,
		#[Assert\Type('bool')]
		public ?bool $use_invoice_address = null,
		#[Assert\Type('bool')]
		public ?bool $is_triangulated = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $settlement_discount_days = null,
		#[Assert\Type('float')]
		public ?float $settlement_discount_percent = null,
		#[Assert\Type('float')]
		public ?float $document_discount_percent = null,
		#[Assert\Type('float')]
		public ?float $available_document_discount_percent = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $document_created_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $promised_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $quotation_expiry_date = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public ?string $order_priority = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $external_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_20 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_10 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_1 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_2 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_3 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_4 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_5 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_6 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_7 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_8 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_9 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_10 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_1 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_2 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_3 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_4 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_5 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_1 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_2 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_3 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_4 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_5 = null,
		#[Assert\Type('object')]
		public ?object $cash_account_invoice_address = null,
		#[Assert\Type('object')]
		public ?object $currency = null,
		#[Assert\Type('object')]
		public ?object $customer = null,
		#[Assert\Type('object')]
		public ?object $delivery_address = null,
		#[Assert\Type('array')]
		public ?array $document_links = null,
		public ?SopOrderReturnProfit $profitability = null,
		#[Assert\Type('array')]
		public ?array $lines = null,
		#[Assert\Type('array')]
		public ?array $memos = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
