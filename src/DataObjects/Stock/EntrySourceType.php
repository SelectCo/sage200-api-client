<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entry source types are used to describe the source module that was used to create a movement. Entry
 * source types can be 'EnumEntrySourceTypeStock', 'EnumEntrySourceTypeSOP', 'EnumEntrySourceTypePOP',
 * 'EnumEntrySourceTypeBOM', 'EnumEntrySourceTypeManual'.<P>The API endpoint returns details of the
 * entry source types that can be used.</P>
 */
class EntrySourceType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
