<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Alerts are messages that can be displayed when a user performs a particular task. You can show
 * alerts when entering purchase orders, returns, generating purchase orders, purchase order from
 * requisition lines and generating purchase orders from trial kitting.
 */
class SupplierAlert
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $alert_text = null,
		#[Assert\Type('bool')]
		public ?bool $is_active = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_orders = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_returns = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_generate_purchase_orders = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_generate_purchase_order_from_requisition_lines = null,
		#[Assert\Type('bool')]
		public ?bool $show_alert_for_generate_purchase_orders_from_trial_kitting = null,
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
