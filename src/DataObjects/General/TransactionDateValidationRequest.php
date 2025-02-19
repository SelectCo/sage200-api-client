<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Request object to validate a transaction date for a given ledger.
 */
class TransactionDateValidationRequest
{
	public function __construct(
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $ledger_type = null,
	) {
	}
}
