<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stocktake status types describe the possible states in which a stocktake can be. Stocktake status
 * type can be 'No stocktake', 'Selecting items', 'Sheets printed', 'Entering counts', or
 * 'Complete'.<P>The API endpoint returns details of the stocktake status types that can be used.</P>
 */
class StocktakeStatusType
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
