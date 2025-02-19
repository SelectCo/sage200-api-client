<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Additional charges can be added to sales orders to account for items such as carriage and insurance.
 * Within the Sage 200 application, users can setup and maintain the list of additional charges that
 * can be referenced when creating a sales order.<br /><br />This API resource can be used to determine
 * what each additional charge is for.
 */
class SopAdditionalCharge
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('float')]
		public ?float $charge_value = null,
		#[Assert\Type('float')]
		public ?float $notional_cost_value = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $tax_code_id = null,
		#[Assert\Type('object')]
		public ?object $nominal_code = null,
		#[Assert\Type('object')]
		public ?object $tax_code = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
