<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Document transmission method types. Document transmission can be by 'Post' or 'Email'.<P>The API
 * endpoint returns details of the document transmission method types that can be used.</P>
 */
class DocumentTransmissionMethodType
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
