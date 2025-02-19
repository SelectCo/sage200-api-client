<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Access to Sage 200 sites is restricted by a Sage account. When invoking any API resource, the site
 * Id must always be specified within the header 'X-Site'.<br /><br />Use this API endpoint to return
 * the list of sites that a user has access to. This operation is particularly important during the
 * initial stages of API development.
 */
class Site
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $company_id = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $company_name = null,
		#[Assert\Type('string'), Assert\Length(max: 36)]
		public ?string $site_id = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $site_name = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $site_short_name = null,
	) {
	}
}
