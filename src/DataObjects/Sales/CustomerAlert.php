<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Alerts are messages that can be displayed when a user performs a particular task. You can show
 * alerts when entering invoices or credit notes, sales orders and returns, quotations and pro forma
 * invoices, and for customer price enquiries.
 */
class CustomerAlert
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $alert_text = null,
		#[Assert\Type('bool')]
		public ?bool $is_active = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_orders = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_proformas = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_quotes = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_credit_notes = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_price_enquiries = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_invoices = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_returns = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_project_bills = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $updated_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
