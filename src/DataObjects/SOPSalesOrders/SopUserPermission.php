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
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $user_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $user_name = null,
		#[Assert\Type('bool')]
		public bool|null   $view_profit_values = null,
		#[Assert\Type('bool')]
		public bool|null   $view_price_calculations = null,
		#[Assert\Type('bool')]
		public bool|null   $override_credit_holds = null,
		#[Assert\Type('bool')]
		public bool|null   $override_prices_discounts = null,
		#[Assert\Type('bool')]
		public bool|null   $override_fulfilment_method = null,
		#[Assert\Type('bool')]
		public bool|null   $override_confirmation_method = null,
		#[Assert\Type('bool')]
		public bool|null   $override_cost_price = null,
		#[Assert\Type('bool')]
		public bool|null   $generate_purchase_orders = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $rapid_order_warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $trade_order_warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $full_order_warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $invoice_warehouse_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
		#[Assert\Type('object')]
		public object|null $rapid_order_warehouse = null,
		#[Assert\Type('object')]
		public object|null $trade_order_warehouse = null,
		#[Assert\Type('object')]
		public object|null $full_order_warehouse = null,
		#[Assert\Type('object')]
		public object|null $invoice_warehouse = null,
	) {
	}
}
