<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Use payment groups to automatically process supplier payments.
 */
class PaymentGroup
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $payment_group_number = null,
		#[Assert\Type('bool')]
		public ?bool $post_to_ledger_on_payment_run = null,
		#[Assert\Type('bool')]
		public ?bool $summarise_payments = null,
		#[Assert\Type('bool')]
		public ?bool $is_supplier_payments_group = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $payment_type = null,
		#[Assert\Type('string'), Assert\Length(max: 32)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
