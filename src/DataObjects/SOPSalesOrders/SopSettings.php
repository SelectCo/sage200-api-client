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
		public ?int $id = null,
		#[Assert\Type('bool')]
		public ?bool $auto_generate_order_return_numbers = null,
		#[Assert\Type('bool')]
		public ?bool $show_order_number_on_confirm = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $order_line_item_type = null,
		#[Assert\Type('bool')]
		public ?bool $amend_analysis_codes = null,
		#[Assert\Type('bool')]
		public ?bool $amend_nominal_codes = null,
		#[Assert\Type('bool')]
		public ?bool $allow_payment_with_order = null,
		#[Assert\Type('bool')]
		public ?bool $user_logon_as_order_taker = null,
		#[Assert\Type('bool')]
		public ?bool $revenue_nominal_account_same_as = null,
		#[Assert\Type('bool')]
		public ?bool $use_same_cost_centre_department_as_customer = null,
		#[Assert\Type('bool')]
		public ?bool $use_same_cost_centre_department_for_issues = null,
		#[Assert\Type('bool')]
		public ?bool $use_same_cost_centre_department_for_assets = null,
		#[Assert\Type('bool')]
		public ?bool $allow_cash_orders = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $cash_order_account_id = null,
		#[Assert\Type('bool')]
		public ?bool $are_prices_tax_inclusive = null,
		#[Assert\Type('bool')]
		public ?bool $allocate_stock_on_order_entry = null,
		#[Assert\Type('bool')]
		public ?bool $update_stock_on_despatch = null,
		#[Assert\Type('bool')]
		public ?bool $record_cancelled_order_lines = null,
		#[Assert\Type('bool')]
		public ?bool $print_picking_lists = null,
		#[Assert\Type('bool')]
		public ?bool $auto_print_picking_lists = null,
		#[Assert\Type('bool')]
		public ?bool $add_invoice_credit_note_to_sales_ledger = null,
		#[Assert\Type('bool')]
		public ?bool $print_order_acknowledgements = null,
		#[Assert\Type('bool')]
		public ?bool $print_despatch_notes = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $fully_paid_invoice_text = null,
		#[Assert\Type('bool')]
		public ?bool $generate_intrastat_entries = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $terms_of_delivery_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $nature_of_transaction_code_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $orders_returns_last_archived_up_to = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $last_archive_run_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_archive_run_on = null,
		#[Assert\Type('bool')]
		public ?bool $print_traceable_numbers_on_picking_lists = null,
		#[Assert\Type('bool')]
		public ?bool $print_traceable_numbers_on_order_acknowledgements = null,
		#[Assert\Type('bool')]
		public ?bool $print_traceable_numbers_on_despatch_notes = null,
		#[Assert\Type('bool')]
		public ?bool $print_traceable_numbers_on_invoices = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $last_purge_archive_run_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_purge_archive_run_on = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $archive_last_purged_up_to = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $mode_of_transport_id = null,
		#[Assert\Type('bool')]
		public ?bool $allow_amend_picking_lists = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $default_free_text_confirm_intent_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $default_service_labour_confirm_intent_type = null,
		#[Assert\Type('bool')]
		public ?bool $show_unallocated_items_on_picking_list = null,
		#[Assert\Type('bool')]
		public ?bool $show_undespatched_items_on_despatch_note = null,
		#[Assert\Type('bool')]
		public ?bool $allow_prospect_quotes = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $prospect_quote_account_id = null,
		#[Assert\Type('bool')]
		public ?bool $use_invoice_date_on_stock_history = null,
		#[Assert\Type('bool')]
		public ?bool $include_terms_of_delivery_on_intrastat = null,
		#[Assert\Type('bool')]
		public ?bool $include_statistical_value_on_intrastat = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $intrastat_date_type = null,
		#[Assert\Type('bool')]
		public ?bool $use_sop_reverse_charge_invoice_option = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_print_eu_zero_rated_sales_option_id = null,
		#[Assert\Type('bool')]
		public ?bool $invoice_payment_immediately = null,
		#[Assert\Type('bool')]
		public ?bool $use_card_processing = null,
		#[Assert\Type('bool')]
		public ?bool $amend_header_analysis_codes = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $last_invoicing_delete_run_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_invoicing_delete_run_on = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $invoicing_last_deleted_up_to = null,
		#[Assert\Type('bool')]
		public ?bool $use_cross_selling_items = null,
		#[Assert\Type('bool')]
		public ?bool $show_frequent_items = null,
		#[Assert\Type('bool')]
		public ?bool $show_recent_items = null,
		#[Assert\Type('bool')]
		public ?bool $show_preferred_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $number_of_days_for_frequent_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $minimum_number_of_lines_for_frequent_items = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $number_of_days_for_recent_items = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_reverse_charge_invoice_option_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $sop_invoice_cis_reverse_charge_text_type = null,
		#[Assert\Type('string'), Assert\Length(max: 120)]
		public ?string $sop_credit_note_cis_reverse_charge_text_type = null,
		#[Assert\Type('bool')]
		public ?bool $record_tracking_on_despatch = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
		#[Assert\Type('object')]
		public ?object $cash_order_account = null,
		#[Assert\Type('object')]
		public ?object $prospect_quote_account = null,
	) {
	}
}
