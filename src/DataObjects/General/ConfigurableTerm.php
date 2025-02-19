<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Configurable terms for the application.
 */
class ConfigurableTerm
{
	public function __construct(
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $key = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $lower_case_single = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $lower_case_plural = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $upper_case_single = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $upper_case_plural = null,
	) {
	}
}
