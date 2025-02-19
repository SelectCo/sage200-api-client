<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * User permissions allow individual user access to certain parts of a sales order or invoice. Default
 * warehouses can also be set for each different order or invoice entry type.<P>Note: the Id parameter
 * expects the user Id as specified in System Administration.</P>
 */
class SopUserPermission
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $user_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $user_name = null,
		#[Assert\Type('bool')]
		public ?bool $view_profit_values = null,
		#[Assert\Type('bool')]
		public ?bool $view_price_calculations = null,
		#[Assert\Type('bool')]
		public ?bool $override_credit_holds = null,
		#[Assert\Type('bool')]
		public ?bool $override_prices_discounts = null,
		#[Assert\Type('bool')]
		public ?bool $override_fulfilment_method = null,
		#[Assert\Type('bool')]
		public ?bool $override_confirmation_method = null,
		#[Assert\Type('bool')]
		public ?bool $override_cost_price = null,
		#[Assert\Type('bool')]
		public ?bool $generate_purchase_orders = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $rapid_order_warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $trade_order_warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $full_order_warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $invoice_warehouse_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
		#[Assert\Type('object')]
		public ?object $rapid_order_warehouse = null,
		#[Assert\Type('object')]
		public ?object $trade_order_warehouse = null,
		#[Assert\Type('object')]
		public ?object $full_order_warehouse = null,
		#[Assert\Type('object')]
		public ?object $invoice_warehouse = null,
	) {
	}
}
