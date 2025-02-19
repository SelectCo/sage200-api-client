<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Traceable types are used to identify the different traceable options of the product that exist
 * within the application. Products can be 'Non-Traceable', 'Serial Numbered' or 'Batch
 * Numbered'.<P>The API endpoint returns details of the traceable types that can be used.</P>
 */
class TraceableType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
