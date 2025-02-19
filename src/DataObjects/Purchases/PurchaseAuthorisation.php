<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Invoices and Credit Notes which are above a threshold value are unauthorised. The value of
 * unauthorised transactions is posted to the default nominal account for Unauthorised Purchases. Use
 * authorisation to reverse the posting from the Unauthorised Purchases nominal account and post to the
 * intended account.
 */
class PurchaseAuthorisation
{
	public function __construct(
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $oplock = null,
		#[Assert\Type('object')]
		public object|null $supplier = null,
		#[Assert\Type('array')]
		public array|null  $nominal_analysis_items = null,
	) {
	}
}
