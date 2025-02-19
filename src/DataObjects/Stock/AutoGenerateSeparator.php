<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Auto generate separators are used to auto generate the batch or serial numbers associated with the
 * product that exist within the application. Auto generate separators can be 'None', 'Space', 'Colon',
 * 'Forward Slash', 'Backward Slash', 'Dot' or 'Hyphen'.<P>The API endpoint returns details of the auto
 * generate option types that can be used.</P>
 */
class AutoGenerateSeparator
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public string|null $separator_character = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
