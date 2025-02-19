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
		public int|null          $id = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null       $class_name = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null       $friendly_class_name = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null       $property_name = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null       $friendly_property_name = null,
		#[Assert\Type('bool')]
		public bool|null         $is_mandatory = null,
		#[Assert\Type('bool')]
		public bool|null         $is_read_only = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null          $slot = null,
		public AnalysisCode|null $analysis_code_id = null,
		public AnalysisCode|null $analysis_code = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null       $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null       $date_time_updated = null,
	) {
	}
}
