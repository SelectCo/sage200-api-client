<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nominal report category types are used in nominal report categories. They determine whether the
 * category is for the Balance Sheet (Asset and Liability) or Profit and Loss (Income and Expense).This
 * list of available types is predefined by the system.</P><P>The API endpoint returns details of
 * nominal report category types that can be used.
 */
class NominalReportCategoryType
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
