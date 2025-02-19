<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Purchase orders are used to represent the purchase of goods or services from a supplier. They are
 * central to a business and define the terms (price, quantity and times) by which the products or
 * services will be received.<br /><br />Please note that as each line is updated independently, as
 * part of a PUT request, a failed line will return an error in the API response body, however, all
 * lines prior to this will be updated. Subsequent lines to the error will not be posted.
 */
class PopOrder
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('bool')]
		public ?bool $is_draft = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $lock_id = null,
		#[Assert\Type('bool')]
		public ?bool $is_editing = null,
		#[Assert\Type('bool')]
		public ?bool $is_credit_limit_exceeded = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_sequence_lines = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $receipt_return_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $invoice_credit_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $cancelled_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $disputed_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $print_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $authorisation_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $authorisation_status_description = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('float')]
		public ?float $subtotal_goods_value = null,
		#[Assert\Type('float')]
		public ?float $subtotal_charges_net_value = null,
		#[Assert\Type('float')]
		public ?float $subtotal_discount_value = null,
		#[Assert\Type('float')]
		public ?float $subtotal_landed_costs_value = null,
		#[Assert\Type('float')]
		public ?float $total_net_value = null,
		#[Assert\Type('float')]
		public ?float $total_tax_value = null,
		#[Assert\Type('float')]
		public ?float $total_gross_value = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $supplier_document_no = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $settlement_discount_days = null,
		#[Assert\Type('float')]
		public ?float $settlement_discount_percent = null,
		#[Assert\Type('float')]
		public ?float $document_discount_percent = null,
		#[Assert\Type('float')]
		public ?float $document_originator_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $document_originator_name = null,
		#[Assert\Type('float')]
		public ?float $document_created_by_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $document_created_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $requested_delivery_date = null,
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
		public ?PopOrderLineDirectDeliveryAddress $default_direct_delivery_address = null,
		#[Assert\Type('object')]
		public ?object $delivery_address = null,
		#[Assert\Type('object')]
		public ?object $supplier = null,
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
