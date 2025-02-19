<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * All currencies have a designated ISO (International Standards Organisation) code that uniquely
 * identifies that currency.
 */
class CurrencyIsoCode
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
