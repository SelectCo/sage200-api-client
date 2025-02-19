<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Document layout are the layouts that are available within the application, which are associated with
 * the document types.
 */
class DocumentLayout
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sys_document_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $layout = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
