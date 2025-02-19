<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The transaction date validation classification is used in System Settings and can be configured as
 * 'Normal', 'Acceptable' or 'Unacceptable'.<P>The API endpoint returns details of the classifications
 * that can be used.</P>
 */
class TransactionDateValidationClassification
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $value = null,
	) {
	}
}
