<?php
declare(strict_types=1);

namespace Selectco\SageApi\DataObjects\General;

/**
 * "company_id": 0,
 * "company_name": "string",
 * "site_id": "string",
 * "site_name": "string",
 * "site_short_name": "string"
 */
class Sites
{
    public function __construct(
        public readonly int $company_id,
        public readonly string|null $company_name = null,
        public readonly string|null $site_id = null,
        public readonly string|null $site_name = null,
        public readonly string|null $site_short_name = null
    )
    {
    }
}
