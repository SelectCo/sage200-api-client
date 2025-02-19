<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Licence for the application.
 */
class Licence
{
	public function __construct(
		#[Assert\Type('bool')]
		public ?bool $is_sales_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_purchase_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_nominal_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_fixed_assets_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_cash_book_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_stock_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_price_book_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_invoicing_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_sales_orders_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_purchase_orders_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_bill_of_materials_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_additional_excel_reports_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_project_accounting_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_manufacturing_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_business_intelligence_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $is_scripting_enabled = null,
	) {
	}
}
