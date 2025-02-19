<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * "This resource returns the details of all POP documents (orders and returns). The default sort
 * (orderby) fields are by 'document_no' and 'Id' ascending."
 */
class PopOrderReturnView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $document_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $document_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $document_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $document_print_status_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $supplier_document_no = null,
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
		#[Assert\Type('float')]
		public ?float $total_accrual_value = null,
		#[Assert\Type('float')]
		public ?float $subtotal_landed_costs = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $settlement_discount_days = null,
		#[Assert\Type('float')]
		public ?float $settlement_discount_percent = null,
		#[Assert\Type('float')]
		public ?float $document_discount_percent = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $document_created_by = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $document_originator_name = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $document_originator_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $requested_delivery_date = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $intrastat_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $authorisation_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $receipt_return_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $invoice_credit_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $cancelled_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $disputed_status_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $source_document_no = null,
		#[Assert\Type('bool')]
		public ?bool $single_delivery_address = null,
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
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $supplier_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $supplier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $supplier_short_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_postal_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_description = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_county = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_post_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_country = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_fax = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $pop_delivery_addr_email = null,
	) {
	}
}
