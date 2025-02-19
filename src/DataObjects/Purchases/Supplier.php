<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Suppliers are one of the most important entities within Sage 200 as they are associated with many
 * important resources within the application and underpin most of the main features (e.g. purchase
 * orders, purchase receipts, etc).
 */
class Supplier
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $short_name = null,
		#[Assert\Type('float')]
		public float|null  $balance = null,
		#[Assert\Type('bool')]
		public bool|null   $on_hold = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public string|null $status_reason = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_status_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $exchange_rate_type = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public string|null $telephone_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $telephone_area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $telephone_subscriber_number = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public string|null $fax_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $fax_area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $fax_subscriber_number = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $website = null,
		#[Assert\Type('float')]
		public float|null  $credit_limit = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $country_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $default_tax_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $vat_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_type = null,
		#[Assert\Type('float')]
		public float|null  $early_settlement_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $early_settlement_discount_days = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $payment_terms_days = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $payment_terms_basis = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $payment_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $factor_house_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $credit_bureau_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $credit_position_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $trading_terms = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $credit_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $account_opened = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_credit_review = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $next_credit_review = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $application_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_received = null,
		#[Assert\Type('bool')]
		public bool|null   $terms_agreed = null,
		#[Assert\Type('float')]
		public float|null  $value_of_current_orders_in_pop = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public string|null $order_priority = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $months_to_keep_transactions = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $default_nominal_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $default_nominal_code_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $default_nominal_code_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $default_nominal_code_department = null,
		#[Assert\Type('bool')]
		public bool|null   $is_supplier_payments_enabled = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_20 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_10 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_1 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_2 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_3 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_4 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_5 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_6 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_7 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_8 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_9 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_10 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_1 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_2 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_3 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_4 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_5 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_1 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_2 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_3 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_4 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_5 = null,
		#[Assert\Type('object')]
		public object|null $bank = null,
		#[Assert\Type('object')]
		public object|null $country_code = null,
		#[Assert\Type('object')]
		public object|null $credit_bureau = null,
		#[Assert\Type('object')]
		public object|null $credit_memo_note = null,
		#[Assert\Type('object')]
		public object|null $credit_position = null,
		#[Assert\Type('object')]
		public object|null $currency = null,
		#[Assert\Type('object')]
		public object|null $default_nominal_code = null,
		#[Assert\Type('object')]
		public object|null $default_tax_code = null,
		#[Assert\Type('object')]
		public object|null $factor_house = null,
		#[Assert\Type('object')]
		public object|null $main_address = null,
		#[Assert\Type('object')]
		public object|null $payment_group = null,
		#[Assert\Type('object')]
		public object|null $status = null,
		#[Assert\Type('array')]
		public array|null  $contacts = null,
		#[Assert\Type('array')]
		public array|null  $memos = null,
		#[Assert\Type('array')]
		public array|null  $alerts = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
