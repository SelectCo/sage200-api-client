<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The internal areas represent departments such as sales, retail and production. Use them to monitor
 * stock issued for internal use.
 */
class InternalArea
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $name = null,
		#[Assert\Type('bool')]
		public ?bool $is_default = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $nominal_code_id = null,
		#[Assert\Type('object')]
		public ?object $nominal_code = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
