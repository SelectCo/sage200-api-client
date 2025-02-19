<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When making larger requests for supplier information, the Supplier Views resource can be a faster
 * alternative to the 'supplier' resource. The Supplier Views resource also returns a wider breadth of
 * information than the Supplier resource. Using Supplier Views could therefore reduce the quantity of
 * API requests needed to return the same information from multiple API resources.
 */
class SupplierView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $short_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $country_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 2)]
		public string|null $country_code = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $currency_symbol = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_iso_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $currency_iso_code = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $currency_iso_code_name = null,
		#[Assert\Type('float')]
		public float|null  $balance = null,
		#[Assert\Type('float')]
		public float|null  $base_balance = null,
		#[Assert\Type('float')]
		public float|null  $credit_limit = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $vat_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $default_tax_rate_id = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $default_tax_rate_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $default_tax_rate_name = null,
		#[Assert\Type('int'), Assert\Length('decimal 2dp')]
		public int|null    $default_tax_rate = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public string|null $default_order_priority = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $default_nominal_account_number = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $default_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $default_nominal_department = null,
		#[Assert\Type('float')]
		public float|null  $early_settlement_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $days_early_settlement_disc_applies = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $payment_terms_in_days = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $payment_terms_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $payment_terms = null,
		#[Assert\Type('bool')]
		public bool|null   $account_is_on_hold = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $account_status_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_status_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $account_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_type = null,
		#[Assert\Type('float')]
		public float|null  $value_of_current_orders_in_pop = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_account_details_last_changed = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_of_last_transaction = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $trading_terms = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $credit_reference = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $credit_bureau_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $credit_bureau_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $credit_position_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $credit_position_name = null,
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
		#[Assert\Type('bool')]
		public bool|null   $is_over_credit_limit = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $months_to_keep_transactions_for = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $telephone_area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public string|null $telephone_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $telephone_subscriber_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $fax_area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public string|null $fax_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $fax_subscriber_number = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $website = null,
		#[Assert\Type('string'), Assert\Length(max: 235)]
		public string|null $contact_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $contact_first_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $contact_middle_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $contact_last_name = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public string|null $contact_default_telephone_number = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public string|null $contact_default_email_address = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $factor_house_name = null,
		#[Assert\Type('string'), Assert\Length(max: 32)]
		public string|null $payment_group_description = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sage_payments_supplier_status_type_id = null,
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
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_location_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_address_line_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_address_line_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_address_line_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_address_line_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $supplier_location_post_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_county = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_country = null,
		#[Assert\Type('string'), Assert\Length(max: 444)]
		public string|null $supplier_location_full_address = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $supplier_location_date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $supplier_location_date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_location_country_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 2)]
		public string|null $supplier_location_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_country_code_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_location_address_country_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 2)]
		public string|null $supplier_location_address_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_location_address_country_code_name = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
