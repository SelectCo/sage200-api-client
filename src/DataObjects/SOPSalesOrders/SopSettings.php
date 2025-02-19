<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The SOP Settings are used to choose how to process and manage your Sales Order Processing.
 */
class SopSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('bool')]
		public bool|null   $auto_generate_order_return_numbers = null,
		#[Assert\Type('bool')]
		public bool|null   $show_order_number_on_confirm = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $order_line_item_type = null,
		#[Assert\Type('bool')]
		public bool|null   $amend_analysis_codes = null,
		#[Assert\Type('bool')]
		public bool|null   $amend_nominal_codes = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_payment_with_order = null,
		#[Assert\Type('bool')]
		public bool|null   $user_logon_as_order_taker = null,
		#[Assert\Type('bool')]
		public bool|null   $revenue_nominal_account_same_as = null,
		#[Assert\Type('bool')]
		public bool|null   $use_same_cost_centre_department_as_customer = null,
		#[Assert\Type('bool')]
		public bool|null   $use_same_cost_centre_department_for_issues = null,
		#[Assert\Type('bool')]
		public bool|null   $use_same_cost_centre_department_for_assets = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_cash_orders = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cash_order_account_id = null,
		#[Assert\Type('bool')]
		public bool|null   $are_prices_tax_inclusive = null,
		#[Assert\Type('bool')]
		public bool|null   $allocate_stock_on_order_entry = null,
		#[Assert\Type('bool')]
		public bool|null   $update_stock_on_despatch = null,
		#[Assert\Type('bool')]
		public bool|null   $record_cancelled_order_lines = null,
		#[Assert\Type('bool')]
		public bool|null   $print_picking_lists = null,
		#[Assert\Type('bool')]
		public bool|null   $auto_print_picking_lists = null,
		#[Assert\Type('bool')]
		public bool|null   $add_invoice_credit_note_to_sales_ledger = null,
		#[Assert\Type('bool')]
		public bool|null   $print_order_acknowledgements = null,
		#[Assert\Type('bool')]
		public bool|null   $print_despatch_notes = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $fully_paid_invoice_text = null,
		#[Assert\Type('bool')]
		public bool|null   $generate_intrastat_entries = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $terms_of_delivery_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nature_of_transaction_code_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $orders_returns_last_archived_up_to = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $last_archive_run_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_archive_run_on = null,
		#[Assert\Type('bool')]
		public bool|null   $print_traceable_numbers_on_picking_lists = null,
		#[Assert\Type('bool')]
		public bool|null   $print_traceable_numbers_on_order_acknowledgements = null,
		#[Assert\Type('bool')]
		public bool|null   $print_traceable_numbers_on_despatch_notes = null,
		#[Assert\Type('bool')]
		public bool|null   $print_traceable_numbers_on_invoices = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $last_purge_archive_run_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_purge_archive_run_on = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $archive_last_purged_up_to = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $mode_of_transport_id = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_amend_picking_lists = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $default_free_text_confirm_intent_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $default_service_labour_confirm_intent_type = null,
		#[Assert\Type('bool')]
		public bool|null   $show_unallocated_items_on_picking_list = null,
		#[Assert\Type('bool')]
		public bool|null   $show_undespatched_items_on_despatch_note = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_prospect_quotes = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $prospect_quote_account_id = null,
		#[Assert\Type('bool')]
		public bool|null   $use_invoice_date_on_stock_history = null,
		#[Assert\Type('bool')]
		public bool|null   $include_terms_of_delivery_on_intrastat = null,
		#[Assert\Type('bool')]
		public bool|null   $include_statistical_value_on_intrastat = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $intrastat_date_type = null,
		#[Assert\Type('bool')]
		public bool|null   $use_sop_reverse_charge_invoice_option = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_print_eu_zero_rated_sales_option_id = null,
		#[Assert\Type('bool')]
		public bool|null   $invoice_payment_immediately = null,
		#[Assert\Type('bool')]
		public bool|null   $use_card_processing = null,
		#[Assert\Type('bool')]
		public bool|null   $amend_header_analysis_codes = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $last_invoicing_delete_run_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_invoicing_delete_run_on = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $invoicing_last_deleted_up_to = null,
		#[Assert\Type('bool')]
		public bool|null   $use_cross_selling_items = null,
		#[Assert\Type('bool')]
		public bool|null   $show_frequent_items = null,
		#[Assert\Type('bool')]
		public bool|null   $show_recent_items = null,
		#[Assert\Type('bool')]
		public bool|null   $show_preferred_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $number_of_days_for_frequent_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $minimum_number_of_lines_for_frequent_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $number_of_days_for_recent_items = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_reverse_charge_invoice_option_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $sop_invoice_cis_reverse_charge_text_type = null,
		#[Assert\Type('string'), Assert\Length(max: 120)]
		public string|null $sop_credit_note_cis_reverse_charge_text_type = null,
		#[Assert\Type('bool')]
		public bool|null   $record_tracking_on_despatch = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
		#[Assert\Type('object')]
		public object|null $cash_order_account = null,
		#[Assert\Type('object')]
		public object|null $prospect_quote_account = null,
	) {
	}
}
