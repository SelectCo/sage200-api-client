<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Source area types are used to describe the area or account type applicable to a stock transaction.
 * Source area types can be 'EnumSourceAreaTypeSupplier', 'EnumSourceAreaTypeCustomer',
 * 'EnumSourceAreaTypeInternal', 'EnumSourceAreaTypeWriteOff', 'EnumSourceAreaTypeOpeningBalance',
 * 'EnumSourceAreaTypeBOM'.<P>The API endpoint returns details of the source area types that can be
 * used.</P>
 */
class SourceAreaType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
