<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Analysis code mapping for an entity in Sage 200.
 */
class AnalysisCodeMapping
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $class_name = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $friendly_class_name = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $property_name = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $friendly_property_name = null,
		#[Assert\Type('bool')]
		public ?bool $is_mandatory = null,
		#[Assert\Type('bool')]
		public ?bool $is_read_only = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $slot = null,
		public ?AnalysisCode $analysis_code_id = null,
		public ?AnalysisCode $analysis_code = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
