<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * SOP Payment methods are used to specify the Sage 200 bank account that a payment is posted to and,
 * to describe the payment used.<br /><br /> The API endpoint returns details of the payment methods
 * that can be used when receiving payments with sales orders.
 */
class SopPaymentMethod
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $description = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bank_account_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('bool')]
		public bool|null   $card_processing_method = null,
		#[Assert\Type('object')]
		public object|null $bank_account = null,
		#[Assert\Type('object')]
		public object|null $currency = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
