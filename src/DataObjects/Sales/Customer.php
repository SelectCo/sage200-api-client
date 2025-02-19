<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Customers are one of the most important entities within Sage 200 as they are associated with many
 * important resources within the application and underpin most of the main features (e.g. sales
 * orders, payment receipts, etc). When making larger requests for customer information, the Customer
 * Views resource can be a faster alternative to this resource.
 */
class Customer
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $short_name = null,
		#[Assert\Type('float')]
		public ?float $balance = null,
		#[Assert\Type('bool')]
		public ?bool $on_hold = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public ?string $status_reason = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $account_status_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $exchange_rate_type = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public ?string $telephone_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $telephone_area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public ?string $telephone_subscriber_number = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public ?string $fax_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $fax_area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public ?string $fax_subscriber_number = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public ?string $website = null,
		#[Assert\Type('float')]
		public ?float $credit_limit = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $country_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $default_tax_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $vat_number = null,
		#[Assert\Type('string'), Assert\Length(max: 9)]
		public ?string $duns_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $account_type = null,
		#[Assert\Type('float')]
		public ?float $early_settlement_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $early_settlement_discount_days = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $payment_terms_days = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $payment_terms_basis = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $average_time_to_pay = null,
		#[Assert\Type('bool')]
		public ?bool $terms_agreed = null,
		#[Assert\Type('float')]
		public ?float $value_of_current_orders_in_sop = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $credit_bureau_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $credit_position_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $finance_charge_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $trading_terms = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $credit_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $account_opened = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_credit_review = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $next_credit_review = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $application_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_received = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_finance_charge_last_run = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $office_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $associated_head_office_id = null,
		#[Assert\Type('bool')]
		public ?bool $produce_statements_for_customer = null,
		#[Assert\Type('bool')]
		public ?bool $is_head_office_with_branches = null,
		#[Assert\Type('bool')]
		public ?bool $use_consolidated_billing = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public ?string $order_priority = null,
		#[Assert\Type('bool')]
		public ?bool $use_tax_code_as_default = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $months_to_keep_transactions = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $default_nominal_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $default_nominal_code_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $default_nominal_code_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $default_nominal_code_department = null,
		#[Assert\Type('float')]
		public ?float $invoice_discount_percent = null,
		#[Assert\Type('float')]
		public ?float $invoice_line_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_discount_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $order_value_discount_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $price_band_id = null,
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
		public ?object $associated_head_office = null,
		#[Assert\Type('object')]
		public ?object $country_code = null,
		#[Assert\Type('object')]
		public ?object $credit_bureau = null,
		#[Assert\Type('object')]
		public ?object $credit_memo_note = null,
		#[Assert\Type('object')]
		public ?object $credit_position = null,
		#[Assert\Type('object')]
		public ?object $currency = null,
		#[Assert\Type('object')]
		public ?object $customer_discount_group = null,
		#[Assert\Type('object')]
		public ?object $default_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $default_tax_code = null,
		#[Assert\Type('object')]
		public ?object $finance_charge = null,
		#[Assert\Type('object')]
		public ?object $main_address = null,
		#[Assert\Type('object')]
		public ?object $order_value_discount = null,
		#[Assert\Type('object')]
		public ?object $price_band = null,
		#[Assert\Type('object')]
		public ?object $sales_credit_note_layout = null,
		#[Assert\Type('object')]
		public ?object $sales_invoice_layout = null,
		#[Assert\Type('object')]
		public ?object $statement_layout = null,
		#[Assert\Type('object')]
		public ?object $status = null,
		#[Assert\Type('array')]
		public ?array $alerts = null,
		#[Assert\Type('array')]
		public ?array $cards = null,
		#[Assert\Type('array')]
		public ?array $contacts = null,
		#[Assert\Type('array')]
		public ?array $limited_price_bands = null,
		#[Assert\Type('array')]
		public ?array $memos = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
