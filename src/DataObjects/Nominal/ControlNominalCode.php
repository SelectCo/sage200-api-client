<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Control nominal codes are default nominal codes. This list of available types is predefined by the
 * system.</P><P>The API endpoint returns details of control nominal code types that can be used.
 */
class ControlNominalCode
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $account_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $nominal_reporting_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $control_nominal_code_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
