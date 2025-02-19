<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stocktake traceable types are used to select stock items by the stock items traceable type to be
 * included on a stocktake. Stocktake traceable types can be 'Non-Traceable', 'Serial Numbered', 'Batch
 * Numbered' or 'Batch and Serial'.<P>The API endpoint returns details of the stocktake traceable types
 * that can be used.</P>
 */
class StocktakeTraceableType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
