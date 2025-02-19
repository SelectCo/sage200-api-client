<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cost centres are typically used to aid collating related costs and reporting on a specific segment
 * of an organisation i.e. a company division such as sales or production.
 */
class CostCentre
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public ?string $contact_name = null,
		#[Assert\Type('string'), Assert\Length(max: 235)]
		public ?string $contact_details = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public ?string $contact_email_address = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
