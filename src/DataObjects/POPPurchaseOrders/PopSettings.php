<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The POP Settings are used to choose how to process and manage your Purchase Order Processing.
 */
class PopSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('bool')]
		public bool|null   $auto_gen_order_return_nos = null,
		#[Assert\Type('bool')]
		public bool|null   $show_quantity_goods_received = null,
		#[Assert\Type('bool')]
		public bool|null   $amend_analysis_codes = null,
		#[Assert\Type('bool')]
		public bool|null   $amend_nominal_codes = null,
		#[Assert\Type('bool')]
		public bool|null   $user_logon_as_order_taker = null,
		#[Assert\Type('bool')]
		public bool|null   $stock_nominal_account_same_as = null,
		#[Assert\Type('bool')]
		public bool|null   $use_same_cost_centre_and_department_as_supplier = null,
		#[Assert\Type('string')]
		public string|null $variances_nominal_account_reference = null,
		#[Assert\Type('string')]
		public string|null $variances_nominal_cost_centre = null,
		#[Assert\Type('string')]
		public string|null $variances_nominal_department = null,
		#[Assert\Type('bool')]
		public bool|null   $analyse_postings_by_cost_centre_and_department = null,
		#[Assert\Type('bool')]
		public bool|null   $match_invoice_credit_to_order_return_only = null,
		#[Assert\Type('bool')]
		public bool|null   $use_disputed_invoicing = null,
		#[Assert\Type('bool')]
		public bool|null   $record_cancelled_order_lines = null,
		#[Assert\Type('bool')]
		public bool|null   $auto_print_copy_orders = null,
		#[Assert\Type('bool')]
		public bool|null   $generate_intrastat_entries = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public string|null $terms_of_delivery_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nature_of_transaction_code_id = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_manual_direct_delivery = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_direct_delivery_to_customer = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_direct_delivery_to_supplier = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_direct_delivery_to_any_address = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $price_difference_nominal_code_id = null,
		#[Assert\Type('bool')]
		public bool|null   $update_price_on_goods_receipt = null,
		#[Assert\Type('bool')]
		public bool|null   $applicable_order_lines_exist = null,
		#[Assert\Type('bool')]
		public bool|null   $prices_set_at_goods_receipt = null,
		#[Assert\Type('bool')]
		public bool|null   $use_order_exchange_rate_for_prices = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_generation_type = null,
		#[Assert\Type('bool')]
		public bool|null   $use_single_purchase_order_for_direct_delivery = null,
		#[Assert\Type('bool')]
		public bool|null   $include_terms_of_delivery_on_intrastat = null,
		#[Assert\Type('bool')]
		public bool|null   $include_statistical_value_on_intrastat = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $mode_of_transport_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $intrastat_date_type = null,
		#[Assert\Type('bool')]
		public bool|null   $include_text_in_accruals = null,
		#[Assert\Type('bool')]
		public bool|null   $include_service_labour_in_accruals = null,
		#[Assert\Type('bool')]
		public bool|null   $include_back_to_back_in_order_generation = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_unauthorised_order_processing = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $default_free_text_confirm_intent_type = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $default_service_labour_confirm_intent_type = null,
		#[Assert\Type('bool')]
		public bool|null   $amend_header_analysis_codes = null,
		#[Assert\Type('bool')]
		public bool|null   $exclude_direct_delivery_for_customer = null,
		#[Assert\Type('bool')]
		public bool|null   $exclude_via_stock_for_customer = null,
		#[Assert\Type('bool')]
		public bool|null   $exclude_direct_delivery_for_order = null,
		#[Assert\Type('bool')]
		public bool|null   $exclude_via_stock_for_order = null,
		#[Assert\Type('bool')]
		public bool|null   $committed_includes_goods_received = null,
		#[Assert\Type('bool')]
		public bool|null   $check_budgets_on_authorise = null,
		#[Assert\Type('bool')]
		public bool|null   $requisition_mandatory_nominal_codes = null,
		#[Assert\Type('bool')]
		public bool|null   $requisition_nominals_in_budget = null,
		#[Assert\Type('bool')]
		public bool|null   $requisition_mandatory_supplier = null,
		#[Assert\Type('bool')]
		public bool|null   $requisition_authoriser_amend = null,
		#[Assert\Type('object')]
		public object|null $price_difference_nominal_code = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
