<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Traceable issue status types are used to describe the issued status of traceable items. Traceable
 * issue status types can be 'All', 'Issued Only', or 'Not Issued'.<P>The API endpoint returns details
 * of the traceable issue status types.</P>
 */
class TraceableIssueStatusType
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
