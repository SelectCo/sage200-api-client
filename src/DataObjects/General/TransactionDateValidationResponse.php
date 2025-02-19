<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Response object to for a transaction date validation request.
 */
class TransactionDateValidationResponse
{
	public function __construct(
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $classification = null,
		#[Assert\Type('string')]
		public ?string $message = null,
	) {
	}
}
