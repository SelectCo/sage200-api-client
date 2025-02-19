<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When working with Microsoft Flow, it is useful to be able to record the state of some data that is
 * used in your flow.<br /><br />Use this API endpoint to read or write data to and from the flow.
 */
class FlowState
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 128)]
		public ?string $flow_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8000)]
		public ?string $value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
